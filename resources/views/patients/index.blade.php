@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"/>
@endpush
@section('header')
    <h2 class="page-head-title">Pacientes</h2>
@endsection
@section('content')
	<div class="card card-table">
		<div class="card-header">
			<div class="d-flex justify-content-center">
				<a class="btn btn-primary pt-1" href="{{ route('patients.create') }}" data-toggle="tooltip" data-placement="right" title="Nuevo paciente">
					<i class="zmdi zmdi-account-add zmdi-hc-lg"></i>
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
                                <div class="custom-control custom-control-sm custom-checkbox be-select-all">
                                    <input class="custom-control-input" type="checkbox" id="check1">
                                    <label class="custom-control-label" for="check1"></label>
                                </div>
							</th>
							<th style="width:20%;">Nombre completo</th>
							<th style="width:25%;">Teléfono</th>
							<th style="width:25%;">Correo</th>
							<th style="width:20%;">Domicilio</th>
							<th style="width:20%;">Privilegios</th>
							<th style="width:15%;"></th>
						</tr>
					</thead>
					<tbody>
					@foreach ($patients as $patient)
						<tr class="success done">
							<td>
								<div class="custom-control custom-control-sm custom-checkbox">
									<input class="custom-control-input" type="checkbox" id="check'.{{$patient->id}}">
									<label class="custom-control-label" for="check'.{{$patient->id}}"></label>
								</div>
							</td>
							<td class="patient-avatar cell-detail patient-info">
								<img class="mt-0 mt-md-2 mt-lg-0" src="{{ asset($patient->avatar) }}" alt="{{ asset($patient->name) }}">
								<span>{{ $patient->name.' '.$patient->lastname }}</span>
							</td>
							<td class="cell-detail" data-project="Bootstrap">
								<span>{{ $patient->phone }}</span>
							</td>
							<td class="cell-detail" data-progress="0,45">
								<span>{{ $patient->email }}</span>
							</td>
							<td class="cell-detail">
								<span>{{ $patient->colony }}</span>
							</td>
							<td class="text-right">
								<a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Editar">
									<i class="zmdi zmdi-edit zmdi-hc-lg"></i>
								</a>
								<form action="{{ route('patients.destroy', $patient) }}" method="post" class="d-inline">
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
				title: 'Paciente creado correctamente'
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
				title: '¿Deseas eliminar este paciente?',
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
						'Este paciente se eliminará para siempre.',
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
				title: 'paciente Editado'
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