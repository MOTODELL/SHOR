@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"/>
@endpush
@section('header')
    <h2 class="page-head-title">Diagnósticos</h2>
@endsection
@section('content')
	<div class="card card-table">
		<div class="card-header">
			<div class="d-flex justify-content-center">
				<a class="btn btn-primary pt-1" href="{{ route('doctors.create') }}" data-toggle="tooltip" data-placement="right" title="Nuevo diagnóstico">
					<i class="zmdi zmdi-account-add zmdi-hc-lg"></i>
					<span class="h4 my-0">Nuevo</span>
				</a>
			</div>
		</div>
		<div class="card-body">
			<div class="container-fluid pb-3">
				<div class="row">
					<div class="col-5">
					</div>
					<div class="col-5">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<button class="btn btn-outline-secondary" type="button" id="button-addon1" disabled><i class="fas fa-search"></i></button>
							</div>
							<input type="text" class="form-control" id="search" placeholder="Buscar">
						</div>
					</div>
					<div class="col-2 d-flex justify-content-end">
						<div class="mt-1">
							<button class="btn btn-success btn-lg"><i class="fas fa-file-excel mr-1"></i> <span class="h4">Descargar</span></button>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover table-fw-widget dataTable">
					<thead>
						<tr>
							<th style="width:5%;">Sexo</th>
							<th style="width:15%;">Cédula profesional</th>
							<th style="width:20%;">Nombre completo</th>
							<th style="width:15%;">Teléfono</th>
							<th style="width:15%;">Correo</th>
							<th style="width:15%;">Domicilio</th>
							<th style="width:10%;"></th>
						</tr>
					</thead>
					<tbody>
					@foreach ($doctors as $doctor)
						<tr class="success done">
							@if ($doctor->sex == 'm')
							<td class="cell-detail" data-toggle="tooltip" data-placement="left" title="Mujer">
								<i class="icon fas fa-venus zmdi-hc-lg"></i>
							</td>
							@else
							<td class="cell-detail" data-toggle="tooltip" data-placement="left" title="Mujer">
								<i class="icon fas fa-mars zmdi-hc-lg"></i>
							</td>
							@endif
							<td class="cell-detail">
								<span>{{ $doctor->professional_id }}</span>
							</td>
							<td class="doctor-avatar cell-detail doctor-info">
								{{-- <img class="mt-0 mt-md-2 mt-lg-0" src="{{ asset($doctor->avatar) }}" alt="{{ asset($doctor->name) }}"> --}}
								<span>{{ $doctor->name.' '.$doctor->paternal_lastname.' '.$doctor->maternal_lastname }}</span>
							</td>
							<td class="cell-detail" data-project="Bootstrap">
								<span>{{ $doctor->phone }}</span>
							</td>
							<td class="cell-detail" data-progress="0,45">
								<span>{{ $doctor->email }}</span>
							</td>
							<td class="cell-detail">
								<span>{{ $doctor->getAddress() }}</span>
							</td>
							<td class="text-right">
								<a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Editar">
									<i class="zmdi zmdi-edit zmdi-hc-lg"></i>
								</a>
								<form action="{{ route('doctors.destroy', $doctor) }}" method="post" class="d-inline">
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
				title: '¡Diagnóstico creado correctamente!'
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
				title: '¿Deseas eliminar este diagnóstico?',
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
						'Este diagnóstico se eliminará para siempre.',
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
				title: '¡Diagnóstico editado correctamente!'
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
