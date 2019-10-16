@extends('layouts.app')
@section('content')
<div class="user-display">
  	<div class="user-display-sm primary">
		</div>
    <div class="user-display-bottom">
			<div class="user-display-avatar">
				<img src="{{ $user->avatar }}" alt="">
			</div>
			<div class="user-display-info">
				<div class="name">{{ $user->name }}</div>
				<div class="nick">{{ $user->lastname }}</div>
			</div>
			<div class="user-display-details">
				<div class="card-header">
					<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" id="user-profile-info-tab" data-toggle="pill" href="#user-profile-info" role="tab" aria-controls="user-profile-info" aria-selected="true">
							<span class="icon zmdi zmdi-pin-account"></span>
							<span>Perfil</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="user-profile-edit-tab" data-toggle="pill" href="#user-profile-edit" role="tab" aria-controls="user-profile-edit" aria-selected="false">
							<span class="icon zmdi zmdi-border-color"></span>
							<span>Editar</span>
						</a>
					</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content tab-body" id="profile-log-switch">
						<div class="tab-pane fade show active pr-3" id="user-profile-info" role="tabpanel" aria-labelledby="user-profile-info-tab">
							<div class="row">
								<div class="col">
									<div class="alert alert-primary alert-simple border-0 shadow-none">
										<div class="icon"><i class="zmdi zmdi-pin-account zmdi-hc-lg"></i></div>
										<div class="message">
											<span class="user-timeline-date">Nombre completo</span>
											<div class="user-timeline-title">{{ $user->name.' '.$user->lastname }}</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="alert alert-danger alert-simple border-0 shadow-none">
										<div class="icon"><i class="zmdi zmdi-email zmdi-hc-lg"></i></div>
										<div class="message">
											<span class="user-timeline-date">Email</span>
											<div class="user-timeline-title">{{ $user->email }}</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="alert alert-success alert-simple border-0 shadow-none">
										<div class="icon"><i class="zmdi zmdi-city-alt zmdi-hc-lg"></i></div>
										<div class="message">
											<span class="user-timeline-date">Area a la que pertenece</span>
											<div class="user-timeline-title">{{ (!$user->getDependency() == '') ? $user->getDependency() : ''  }}</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="alert alert-warning alert-simple border-0 shadow-none">
										<div class="icon"><i class="zmdi zmdi-shield-security zmdi-hc-lg"></i></div>
										<div class="message">
											<span class="user-timeline-date">Privilegios</span>
											<div class="user-timeline-title">{{ auth()->user()->getRole() }}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="user-profile-edit" role="tabpanel" aria-labelledby="user-profile-edit-tab">
							<form method="POST" action="{{ route('users.update', $user) }}">
								@csrf
								@method('PUT')
								<div class="form-row mt-4">
									<div class="form-group col-sm-12 col-md-6 col-lg-4">
										<label for="name"><span class="text-danger pr-1">*</span>{{ __('Nombre(s)') }}</label>
										<input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
										@error('name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group col-sm-12 col-md-6 col-lg-4">
										<label for="lastname"><span class="text-danger pr-1">*</span>{{ __('Apellido(s)') }}</label>
										<input id="lastname" type="text" class="form-control form-control-lg @error('lastname') is-invalid @enderror" placeholder="Apellido" name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname">
										@error('lastname')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group col-sm-12 col-md-6 col-lg-4">
										<label for="email"><span class="text-danger pr-1">*</span>{{ __('Correo electronico') }}</label>
										<input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="ejemplo@correo.com">
										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group col-sm-12 col-md-6 col-lg-4">
										<label for="username"><span class="text-danger pr-1">*</span>{{ __('Nombre de usuario') }}</label>
										<input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" placeholder="example123">
										@error('username')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group col-sm-12 col-md-6 col-lg-4">
										<label for="password"><span class="text-danger pr-1">*</span>{{ __('Contraseña') }}</label>
										<input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required placeholder="********">
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group col-sm-12 col-md-6 col-lg-4">
										<label for="password-confirm"><span class="text-danger pr-1">*</span>{{ __('Confirmación de contraseña') }}</label>
										<input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required placeholder="********">
									</div>
									<div class="col-md-12 d-flex justify-content-center mt-2">
										<button type="submit" class="btn btn-primary pt-1">
											<i class="zmdi zmdi-refresh-alt zmdi-hc-2x pr-1"></i>
											<span class="h4 my-0">Actualizar</span>
										</button>
									</div>
								</div>
							</form>
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
