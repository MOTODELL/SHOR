@extends('layouts.app')
@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"/>
@endpush
@section('header')
	<div class="d-flex justify-content-between align-items-center">
		<h2 class="page-head-title">Causes</h2>
		<a class="btn btn-lg btn-primary shadow-sm pt-1" href="{{ route('causes.create') }}" title="Nuevo cause">
			<i class="zmdi zmdi-collection-plus zmdi-hc-lg pr-1"></i>
			<span class="h4">Nuevo cause</span>
		</a>
	</div>
@endsection
@section('content')
<div class="card card-table">
	<div class="card-body">
		<div class="container-fluid py-5">
			<div class="row">
				<div class="col-5">
				</div>
				<div class="col-5">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<button class="btn btn-outline-secondary" type="button" disabled>
								<i class="fas fa-search"></i>
							</button>
						</div>
						<input type="text" class="form-control" id="search" placeholder="Buscar">
					</div>
				</div>
				<div class="col-2 d-flex justify-content-end">
					<div class="mt-1">
						<a href="{{ route('causes.export') }}" class="btn btn-success btn-lg" title="Descargar">
							<i class="fas fa-file-excel mr-1"></i>
							<span class="h4">Descargar</span>
						</a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-sm table-hover table-fw-widget dataTable">
				<thead>
					<tr>
						<th style="width:35%;">Código</th>
						<th style="width:50%;">Descripción</th>
						<th style="width:10%;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($causes as $cause)
						<tr class="success done">
							<td class="cell-detail" data-project="Bootstrap">
								<span>{{ $cause->code }}</span>
							</td>
							<td class="cell-detail" data-project="Bootstrap">
								<span>{{ $cause->description }}</span>
							</td>
							<td class="text-right">
								<a href="{{ route('causes.edit', $cause->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Editar">
										<i class="zmdi zmdi-edit zmdi-hc-lg"></i>
								</a>
								<form action="{{ route('causes.destroy', $cause) }}" method="post" class="d-inline">
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
				title: '¡Cause creado correctamente!'
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
				title: '¿Deseas eliminar este cause?',
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
						'Este cause se eliminará.',
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
				title: '¡Cause editado correctamente!'
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
