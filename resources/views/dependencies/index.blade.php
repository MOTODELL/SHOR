@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"/>
@endpush
@section('header')
    <h2 class="page-head-title">Servicios</h2>
@endsection
@section('content')
    <div class="card card-table">
		<div class="card-header">
			<div class="d-flex justify-content-center">
				<a class="btn btn-primary pt-1" href="{{ route('dependencies.create') }}" data-toggle="tooltip" data-placement="right" title="Nuevo servicio">
					<i class="zmdi zmdi-collection-plus zmdi-hc-lg pr-1"></i>
					<span class="h4 my-0">Nuevo</span>
				</a>
			</div>
		</div>
        <div class="card-body">
			<div class="container-fluid pb-3">
			    <table class="table table-striped table-hover table-fw-widget dataTable">
    				<thead>
    					<tr>
    						<th style="width:5%;">
                                <div class="custom-control custom-control-sm custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="check5">
                                <label class="custom-control-label" for="check5"></label>
                                </div>
                            </th>
                            <th style="width:85%;">Nombre</th>
                            <th style="width:10%;"></th>
    					</tr>
    				</thead>
    				<tbody>
    				@foreach ($dependencies as $dependency)
    					<tr class="success done">
    						<td>
    							<div class="custom-control custom-control-sm custom-checkbox">
    								<input class="custom-control-input" type="checkbox" id="check6">
    								<label class="custom-control-label" for="check6"></label>
    							</div>
    						</td>
                            <td class="cell-detail" data-project="Bootstrap">
                                <span>{{ $dependency->description }}</span>
                            </td>
    						<td class="text-right">
                                <a href="{{ route('dependencies.edit', $dependency->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Editar">
                                    <i class="zmdi zmdi-edit zmdi-hc-lg"></i>
                                </a>
    							<form action="{{ route('dependencies.destroy', $dependency) }}" method="post" class="d-inline">
    								@csrf
    								@method('DELETE')
    								<button type="submit" class="btn btn-danger remove-link" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
                                        <i class="zmdi zmdi-delete zmdi-hc-lg"></i>
                                    </button>
    							</form>
    						</td>
    					</tr>
    					@endforeach
    				</tbody>
    			</table>
			</div>
        </div>
    </div>
@endsection
@push('scripts')
	@if (session('message-store'))
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 2000
			});
			Toast.fire({
				type: 'success',
				title: '¡Servicio creado correctamente!'
			});
		</script>
	@endif
	<script>
		$(document).on("click", ".remove-link", function(e) {
		var btn = $(this);
			Swal.mixin({
				customClass: {
					cancelButton: 'btn btn-danger',
					confirmButton: 'btn btn-success'
				},
				buttonsStyling: false
			});
			Swal.fire({
				title: '¿Deseas eliminar este servicio?',
				text: "¡Esta acción no podrá ser revertida!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: 'Si, eliminar',
				reverseButtons: true
			}).then((result) => {
				if (result.value) {
					Swal.fire(
						'Eliminando...',
						'Este servicio se eliminará.',
						'error'
					);
					$(btn).closest("form").submit();
				} else if (result.dismiss === Swal.DismissReason.cancel) {
					Swal.fire(
					'¡Cancelado!',
					'Acción revertida',
					'error'
					);
				}
			});
			e.preventDefault();
			return false;
		});
	</script>
	@if (session('message-update'))
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
			Toast.fire({
				type: 'info',
				title: '¡Servicio editado correctamente!'
			});
		</script>
	@endif
    <script src="{{ asset('lib/datatables/datatables.net/js/jquery.dataTables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.flash.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/jszip/jszip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/pdfmake/pdfmake.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/pdfmake/vfs_fonts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.print.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.html5.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}" type="text/javascript"></script>
@endpush