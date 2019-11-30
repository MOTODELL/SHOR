@extends('layouts.app')
@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"/>
@endpush
@section('header')
	<div class="d-flex justify-content-between align-items-center">
		<h2 class="page-head-title">Pacientes</h2>
		<a class="btn btn-lg btn-primary shadow-sm pt-1" href="{{ route('patients.create') }}" title="Nuevo paciente">
			<i class="zmdi zmdi-account-add zmdi-hc-lg mr-1"></i>
			<span class="h4">Nuevo paciente</span>
		</a>
	</div>
@endsection
@section('content')
	<div class="card card-table">
		<div class="card-body pt-5">
			<div class="container-fluid pb-3">
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
							<a href="{{ route('patients.export') }}" class="btn btn-success btn-lg"><i class="fas fa-file-excel mr-1"></i> <span class="h4">Descargar</span></a>
						</div>
					</div>
				</div>
				<table class="table table-striped table-sm table-hover table-fw-widget dataTable">
					<thead>
						<tr>
							<th style="width:35%;">Nombre completo</th>
							<th style="width:20%;">CURP</th>
							<th style="width:20%;">Número de seguro social</th>
							<th style="width:15%;"></th>
						</tr>
					</thead>
					<tbody>
					@foreach ($patients as $patient)
						<tr class="success done">
							<td class="patient-avatar cell-detail patient-info">
								<span>{{ $patient->name.' '.$patient->paternal_lastname.' '.$patient->maternal_lastname }}</span>
							</td>
							<td class="cell-detail">
								<span>{{ $patient->curp }}</span>
							</td>
							<td class="cell-detail">
								<span>{{ $patient->ssn['ssn'] }}</span>
							</td>
							<td class="text-right">
								<span class="btn btn-primary btn-view cursor-pointer mb-0 mr-0" data-id="{{ $patient->id }}" data-toggle="tooltip" data-placement="left" title="Ver">
									<i class="zmdi zmdi-eye zmdi-hc-lg"></i>
								</span>
								<a href="{{ route('patients.edit', $patient) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Editar">
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
	<div class="modal fade colored-header colored-header-primary" id="modal-show" tabindex="-1" role="dialog">
		<div class="modal-dialog full-width">
			<div class="modal-content">
				<div class="modal-header modal-header-colored">
					<h3 class="modal-title">Información del paciente</h3>
					<button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"></span></button>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<legend class="my-0 font-weight-light">Datos personales</legend>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="zmdi zmdi-pin-account zmdi-hc-lg"></i></div>
								<div class="message">
									<span class="user-timeline-date">Nombre completo</span>
									<div class="user-timeline-title patient-fullname"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="icon fas fa-fingerprint"></i></div>
								<div class="message">
									<span class="user-timeline-date">CURP</span>
									<div class="user-timeline-title patient-curp"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i></div>
								<div class="message">
									<span class="user-timeline-date">Fecha de nacimiento</span>
									<div class="user-timeline-title patient-birthdate"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon patient-sex_icon"></div>
								<div class="message">
									<span class="user-timeline-date">Sexo</span>
										<div class="user-timeline-title patient-sex">Mujer</div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="zmdi zmdi-phone zmdi-hc-lg"></i></div>
								<div class="message">
									<span class="user-timeline-date">Teléfono</span>
									<div class="user-timeline-title patient-phone"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="icon fas fa-map-marker-alt"></i></div>
								<div class="message">
									<span class="user-timeline-date">Lugar de nacimiento</span>
									<div class="user-timeline-title patient-birthplace"></div>
								</div>
							</div>
						</div>
						<legend class="my-0 font-weight-light">Número del seguro social</legend>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon">NSS</div>
								<div class="message">
									<span class="user-timeline-date">Tipo de seguro social</span>
									<div class="user-timeline-title patient-ssn_type"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon">NSS</div>
								<div class="message">
									<span class="user-timeline-date">Número de seguro social</span>
									<div class="user-timeline-title patient-ssn"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="icon fas fa-list-ol"></i></div>
								<div class="message">
									<span class="user-timeline-date">Número de integrante</span>
									<div class="user-timeline-title patient-number"></div>
								</div>
							</div>
						</div>
						<legend class="my-0 font-weight-light">Domicilio</legend>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="icon fas fa-road"></i></div>
								<div class="message">
									<span class="user-timeline-date">Tipo de vialidad</span>
									<div class="user-timeline-title patient-viality_type"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="icon fas fa-road"></i></div>
								<div class="message">
									<span class="user-timeline-date">Nombre de la vialidad</span>
									<div class="user-timeline-title patient-viality_name"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="icon fas fa-hashtag"></i></div>
								<div class="message">
									<span class="user-timeline-date">Número exterior</span>
									<div class="user-timeline-title patient-number_ext"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="icon fas fa-hashtag"></i></div>
								<div class="message">
									<span class="user-timeline-date">Número interior</span>
									<div class="user-timeline-title patient-number_int"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="zmdi zmdi-city zmdi-hc-lg"></i></div>
								<div class="message">
									<span class="user-timeline-date">Tipo de asentamiento humano</span>
									<div class="user-timeline-title patient-settlement_type"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="zmdi zmdi-city zmdi-hc-lg"></i></div>
								<div class="message">
									<span class="user-timeline-date">Nombre del asentamiento humano</span>
									<div class="user-timeline-title patient-settlement_name"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon">CP.</div>
								<div class="message">
									<span class="user-timeline-date">Código postal</span>
									<div class="user-timeline-title patient-zip_code"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="icon fas fa-map-marked-alt"></i></div>
								<div class="message">
									<span class="user-timeline-date">Localidad</span>
									<div class="user-timeline-title patient-locality"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="icon fas fa-map-marked-alt"></i></div>
								<div class="message">
									<span class="user-timeline-date">Municipio</span>
									<div class="user-timeline-title patient-municipality"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group col-sm-6 col-md-4">
						<div class="alert alert-primary alert-simple border-0 shadow-none">
							<div class="icon"><i class="icon fas fa-flag"></i></div>
							<div class="message">
								<span class="user-timeline-date">Estado</span>
								<div class="user-timeline-title patient-state"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary md-close" type="button" data-dismiss="modal">Cerrar</button>
				</div>
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
				title: '¡Paciente creado correctamente!'
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
				title: '¡Paciente editado correctamente!'
			});
		</script>
	@endif
	<script>
		$(document).ready(function(){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$('.btn-view').click(function(){
				let id = $(this).data('id');
				$.ajax({
					url: '{{ route("fetch.patient") }}',
					method:"POST",
					data: {"id" : id},
					success:function(patient){
						console.log(patient);
						
						$('.patient-fullname').html(patient.fullname);
						$('.patient-curp').html(patient.curp);
						$('.patient-birthdate').html(patient.birthdate);
						$('.patient-sex_icon').html(patient.sex_icon);
						$('.patient-sex').html(patient.sex);
						$('.patient-birthplace').html(patient.birthplace);
						$('.patient-phone').html(patient.phone);
						$('.patient-ssn_type').html(patient.ssn_type);
						$('.patient-ssn').html(patient.ssn);
						$('.patient-number').html(patient.number);
						$('.patient-viality').html(patient.viality_type);
						$('.patient-street').html(patient.viality_name);
						$('.patient-number_ext').html(patient.number_ext);
						$('.patient-number_int').html(patient.number_int);
						$('.patient-settlement_type').html(patient.settlement_type);
						$('.patient-settlement_name').html(patient.settlement_name);
						$('.patient-zip_code').html(patient.zip_code);
						$('.patient-locality').html(patient.locality);
						$('.patient-municipality').html(patient.municipality);
						$('.patient-state').html(patient.state);
						$('#modal-show').modal('show');
					}
				});
			});
		});
	</script>
	<script src="{{ asset('lib/datatables/datatables.net/js/jquery.dataTables.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.flash.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/jszip/jszip.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/pdfmake/pdfmake.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/pdfmake/vfs_fonts.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/jquery.niftymodals/js/jquery.niftymodals.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.print.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.html5.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}" type="text/javascript"></script>
@endpush
