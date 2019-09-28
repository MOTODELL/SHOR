@extends('layouts.app')
@section('content')
<div class="row profile-page">
	<div class="col-12">
		<div class="card rounded shadow-none">
			<div class="card-body">
				<div class="profile-header text-white">
					<div class="d-flex justify-content-center justify-content-md-between mx-4 mx-xl-5 px-xl-5 flex-wrap">
						<div class="profile-info d-flex align-items-center justify-content-center flex-wrap mr-sm-3">
							<div class="stage-wrapper text-dark">
								<div class="stages">  
									<i class="mdi mdi-desktop-mac mdi-48px"></i>
								</div>
							</div>
							<div class="wrapper pl-sm-4">
								<h4 class="profile-user-name text-center text-sm-left">{{ $dependency->alias }}</h4>
								<div class="wrapper d-flex align-items-center flex-wrap">
									<h4 class="profile-user-designation text-center text-md-left my-2 my-md-0">{{ $dependency->name }}</h4>
								</div>
							</div>
						</div>
						<div class="details mt-2 mt-md-0">
							<div class="detail-col pr-3 mr-3">
								<h4>{{ $dependency->slug }}</p>
							</div>
							<div class="detail-col">
								<h4>{{ $dependency->valid_ips()->first()->valid_ip }}</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="profile-body">
					<ul class="nav tab-switch" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="user-dependency-info-tab" data-toggle="pill" href="#user-dependency-info" role="tab" aria-controls="user-dependency-info" aria-selected="false"><i class="mdi mdi-desktop-mac pr-2 mdi-18px"></i>Mi dependencia</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="user-dependency-edit-tab" data-toggle="pill" href="#user-dependency-edit" role="tab" aria-controls="user-dependency-edit" aria-selected="false"><i class="mdi mdi-edit pr-2 mdi-18px"></i>Editar dependencia</a>
						</li>
					</ul>
					<div class="row pt-5">
						<div class="col">
							<div class="tab-content tab-body" id="profile-log-switch">
								<div class="tab-pane fade show active pr-3" id="user-profile-info" role="tabpanel" aria-labelledby="user-profile-info-tab">
									<div class="row">
										<div class="col">
											<div class="stage-wrapper pl-4">
												<div class="stages pl-5 pb-4">
													<div class="btn btn-icons btn-rounded stage-badge btn-inverse-info">
														<i class="mdi mdi-desktop-mac mdi-18px"></i>
													</div>
													<p class="mb-0 mr-2 text-blue-dark"><strong>Nombre completo</strong></p>
												<h5>{{ $dependency->name }}</h5>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="stage-wrapper pl-4">
												<div class="stages pl-5 pb-4">
													<div class="btn btn-icons btn-rounded stage-badge btn-secondary">
														<i class="mdi mdi-yelp mdi-18px"></i>
													</div>
													<p class="mb-0 mr-2 text-blue-dark"><strong>Alias</strong></p>
													<h5>{{ $dependency->alias }}</h5>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="stage-wrapper pl-4">
												<div class="stages pl-5 pb-4">
													<div class="btn btn-icons btn-rounded stage-badge btn-inverse-primary">
														<i class="mdi mdi-web mdi-18px"></i>
													</div>
													<p class="mb-0 mr-2 text-blue-dark"><strong>Identificador</strong></p>
													<h5>{{ $dependency->slug }}</h5>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="stage-wrapper pl-4">
												<div class="stages pl-5 pb-4">  
													<div class="btn btn-icons btn-rounded stage-badge btn-inverse-success">
														<i class="mdi mdi-ethernet mdi-18px"></i>
													</div>
													<p class="mb-0 mr-2 text-blue-dark"><strong>IP valida</strong></p>
													<h5>{{ $dependency->valid_ips()->first()->valid_ip }}</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
								{{-- <div class="tab-pane fade" id="user-profile-edit" role="tabpanel" aria-labelledby="user-profile-edit-tab">
									<form method="POST" action="{{ route('users.update', $user->id) }}">
										@csrf
										@method('PUT')
										<div class="form-row mt-4">
											<div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
												<label for="fullname">{{ __('Nombre completo') }}</label>
												<input id="fullname" type="text" class="form-control form-control-lg @error('fullname') is-invalid @enderror" placeholder="Nombre completo" name="fullname" value="" required autocomplete="fullname" autofocus>
												@error('fullname')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
											<div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
												<label for="email">{{ __('Correo electronico') }}</label>
												<input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="ejemplo@correo.com">
												@error('email')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
											@if (auth()->user()->hasRole('sudo'))
											<div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
												<label for="role">{{ __('Tipo de usuario') }}</label>
												<select name="role" id="role" class="form-control custom-select select2" style="width: 100%">
													@foreach ($roles as $role)
														@if ($user->getRole() == $role->description)
															<option value="{{ $role->name }}" selected>{{ $role->description }}</option>
														@else
															<option value="{{ $role->name }}">{{ $role->description }}</option>
														@endif
													@endforeach
												</select>
											</div>
											@else
											<div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
												<label for="role">{{ __('Tipo de usuario') }}</label>
												<input id="role" type="text" class="form-control form-control-lg" name="role" value="{{ auth()->user()->getRole() }}" required autocomplete="role" placeholder="example123" readonly disabled>
											</div>
											@endif
											@if ((auth()->user()->hasRole('sudo')) ? '' : auth()->user()->getDependency())
											<div class="form-group col-sm-12 col-md-6 col-xl-3">
												<label for="dependency">{{ __('Dependencia a la que pertenece') }}</label>
												<select name="dependency" id="dependency" class="form-control custom-select select2" style="width: 100%">
													@foreach ($dependencies as $dependency)
														@if ($user->getDependency() == $dependency->name)
															<option value="{{ $dependency->id }}" selected>{{ $dependency->name }}</option>
														@else
															<option value="{{ $dependency->id }}">{{ $dependency->name }}</option>
														@endif
													@endforeach
												</select>
											</div>
											@else
											@endif
											<h6 class="text-primary w-100">Sino desea cambiar su contraseña, deja en blanco los siguientes campos</h6>
											<hr class="w-100 mt-0">
											<div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
												<label for="username">{{ __('Nombre de usuario') }}</label>
												<input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" placeholder="example123" readonly disabled>
											</div>
											<div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
												<label for="password">{{ __('Nueva contraseña') }}</label>
												<input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="********">
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
											<div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
												<label for="password-confirm">{{ __('Confirmación de la nueva contraseña') }}</label>
												<input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="********">
											</div>
											<div class="col-md-12 d-flex justify-content-center mt-2">
												<button type="submit" class="btn btn-primary float-right"><i class="mdi mdi-refresh mdi-18px"></i>{{ __('Actualizar') }}</button>
											</div>
										</div>
									</form>
								</div> --}}
								<div class="tab-pane fade" id="user-dependency-info" role="tabpanel" aria-labelledby="user-dependency-edit-tab">
									<span>prueba info</span>
								</div>
								<div class="tab-pane fade" id="user-dependency-edit" role="tabpanel" aria-labelledby="user-dependency-edit-tab">
									<span>prueba</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('inline-scripts')
	@if (session()->has('message'))
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});
			
			Toast.fire({
				type: 'success',
				title: 'Usuario agregado'
			});
		</script>
	@endif
@endpush

<style>
.btn-inverse-primary {
	color: #2196f3;
	background-color: rgba(33, 150, 243, 0.2);
	background-image: none;
	border-color: rgba(33, 150, 243, 0);
}
.btn-inverse-primary:hover {
	color: #2196f3;
	background-color: rgba(33, 150, 243, 0.3);
	border-color: rgba(33, 150, 243, 0);
}
.btn-inverse-primary.active, .btn-inverse-primary:active, .show > .btn-inverse-primary.dropdown-toggle {
	color: #2196f3;
	background-color: rgba(33, 150, 243, 0.3);
	border-color: rgba(33, 150, 243, 0);
}
</style>