@extends('layouts.app')
@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"/>
@endpush
@section('header')
	<div class="d-flex justify-content-between align-items-center">
		<h2 class="page-head-title">Usuarios</h2>
		<a class="btn btn-lg btn-primary shadow-sm pt-1" href="{{ route('users.create') }}" title="Nuevo usuario">
			<i class="zmdi zmdi-account-add zmdi-hc-lg mr-1"></i>
			<span class="h2"><small>Nuevo usuario</small></span>
		</a>
	</div>
@endsection
@section('content')
	<div class="card card-table">
		<div class="card-body pt-5">
			<div class="container-fluid pb-3">
				<div class="row">
					<div class="col-5">
						<div class="ml-1">
							<span class="font-weight-bold">Filtrar por:<br></span>
							<div class="pt-1">
								@foreach ($roles as $role)
									<div class="custom-control custom-checkbox custom-control-inline">
										<input class="custom-control-input" type="checkbox" id="check-{{ $role->name }}">
										<label class="custom-control-label" for="check-{{ $role->name }}">{{ $role->description }}</label>
									</div>
								@endforeach
							</div>
						</div>
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
							<a href="{{ route('users.export') }}" class="btn btn-sm btn-success btn-lg" title="Descargar">
								<i class="fas fa-file-excel mr-1"></i> <span class="h4">Descargar</span>
							</a>
						</div>
					</div>
				</div>
				<table class="table table-striped table-sm table-hover table-fw-widget dataTable">
					<thead>
						<tr>
							<th style="width:40%;">Nombre completo</th>
							<th style="width:20%;">Tipo de usuario</th>
							<th style="width:20%;">Área de servicio</th>
							<th style="width:20%;"></th>
						</tr>
					</thead>
					<tbody>
					@foreach ($users as $user)
						@if (auth()->user()->id == $user->id)
						@else
							<tr class="success {{ $user->roleName }}">
								<td class="user-avatar cell-detail user-info">
									<img class="mt-0 mt-md-2 mt-lg-0" src="{{ asset($user->avatar) }}" alt="{{ asset($user->name) }}">
									<span class="mt-1">{{ $user->name.' '.$user->paternal_lastname.' '.$user->maternal_lastname }}</span>
								</td>
								<td class="cell-detail">
									<span>{{ $user->getRoleDescription() }}</span>
								</td>
								<td class="cell-detail">
									<span>{!! !empty($user->getDependency()) > 0 ? $user->getDependency() : '<span class="text-muted"><i>N/A</i></span>' !!}</span>
								</td>
								<td class="text-right">
									<span class="btn btn-primary btn-view cursor-pointer mb-0 mr-0" data-id="{{ $user->id }}" data-toggle="tooltip" data-placement="left" title="Ver">
										<i class="zmdi zmdi-eye zmdi-hc-lg"></i>
									</span>
									<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Editar">
										<i class="zmdi zmdi-edit zmdi-hc-lg"></i>
									</a>
									<form action="{{ route('users.destroy', $user) }}" method="post" class="d-inline">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger remove-link" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
											<i class="zmdi zmdi-delete zmdi-hc-lg"></i>
										</button>
									</form>
								</td>
							</tr>
						@endif
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
					<h3 class="modal-title">Información del usuario</h3>
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
									<div class="user-timeline-title user-fullname"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="icon fas fa-fingerprint"></i></div>
								<div class="message">
									<span class="user-timeline-date">CURP</span>
									<div class="user-timeline-title user-curp"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i></div>
								<div class="message">
									<span class="user-timeline-date">Fecha de nacimiento</span>
									<div class="user-timeline-title user-birthdate"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon user-sex-icon"></div>
								<div class="message">
									<span class="user-timeline-date">Sexo</span>
									<div class="user-timeline-title user-sex"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="icon fas fa-map-marker-alt"></i></div>
								<div class="message">
									<span class="user-timeline-date">Lugar de nacimiento</span>
									<div class="user-timeline-title user-birthplace"></div>
								</div>
							</div>
						</div>
						<legend class="my-0 font-weight-light">Datos de contacto</legend>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="zmdi zmdi-phone zmdi-hc-lg"></i></div>
								<div class="message">
									<span class="user-timeline-date">Teléfono</span>
									<div class="user-timeline-title user-phone"></div>
								</div>
							</div>
						</div>
						<div class="form-group col-sm-6 col-md-4">
							<div class="alert alert-primary alert-simple border-0 shadow-none">
								<div class="icon"><i class="zmdi zmdi-email zmdi-hc-lg"></i></div>
								<div class="message">
									<span class="user-timeline-date">Correo electrónico</span>
									<div class="user-timeline-title user-email"></div>
								</div>
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
				title: '¡Usuario creado correctamente!'
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
				title: '¿Deseas eliminar este usuario?',
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
						'Este usuario se eliminará para siempre.',
						'error'
					);
					$(btn).closest("form").submit();
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
				title: '¡Usuario editado correctamente!'
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
					url: '{{ route("fetch.user") }}',
					method:"POST",
					data: {"id" : id},
					success:function(user){
						$('.user-fullname').html(user.fullname);
						$('.user-curp').html(user.curp);
						$('.user-birthdate').html(user.birthdate);
						$('.user-sex-icon').html(user.sex_icon);
						$('.user-sex').html(user.sex);
						$('.user-birthplace').html(user.birthplace);
						$('.user-phone').html(user.phone);
						$('.user-email').html(user.email);
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
	<script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.print.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-buttons/js/buttons.html5.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}" type="text/javascript"></script>
@endpush
