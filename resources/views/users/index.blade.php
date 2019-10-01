@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"/>
@endpush
@section('header')
    <h2 class="page-head-title">Usuarios</h2>
@endsection
@section('content')
	<div class="card card-table">
		<div class="card-header">
			<div class="d-flex justify-content-center">
				<a class="btn btn-primary pt-1" href="{{ route('users.create') }}" data-toggle="tooltip" data-placement="right" title="Nuevo usuario">
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
							<th style="width:25%;">Correo</th>
							<th style="width:20%;">Dependencia</th>
							<th style="width:20%;">Privilegios</th>
							<th style="width:15%;"></th>
						</tr>
					</thead>
					<tbody>
					@foreach ($users as $user)
						<tr class="success done">
							<td>
								<div class="custom-control custom-control-sm custom-checkbox">
									<input class="custom-control-input" type="checkbox" id="check'.{{$user->id}}">
									<label class="custom-control-label" for="check'.{{$user->id}}"></label>
								</div>
							</td>
							<td class="user-avatar cell-detail user-info">
								<img class="mt-0 mt-md-2 mt-lg-0" src="{{ asset($user->avatar) }}" alt="{{ asset($user->name) }}">
								<span>{{ $user->name.' '.$user->lastname }}</span>
							</td>
							<td class="cell-detail" data-project="Bootstrap">
								<span>{{ $user->email }}</span>
							</td>
							<td class="cell-detail" data-progress="0,45">
								<span>{{ $user->lastname }}</span>
							</td>
							<td class="cell-detail">
								<span>{{ $user->email }}</span>
							</td>
							<td class="text-right">
								<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Editar">
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
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
@push('scripts')
	@if ('message-store')
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 2000
			});
			Toast.fire({
				type: 'success',
				title: 'Usuario creado correctamente'
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