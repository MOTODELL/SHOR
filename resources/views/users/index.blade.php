@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"/>
@endpush
@section('header')
    <h2 class="page-head-title">Usuarios</h2>
@endsection
@section('content')
	<div class="card card-table">
		<div class="card-header">
			<div class="d-flex justify-content-center">
				<a class="btn btn-rounded btn-space btn-primary" href="{{ route('users.create') }}">
					<i class="icon zmdi zmdi-account-add icon-left zmdi-hc-5x"></i>
					Nuevo
				</a>
			</div>
			<div class="tools dropdown justify-content-end">
				<span class="icon mdi mdi-download"></span>
				<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<span class="icon zmdi zmdi-more-vert"></span>
				</a>
				<div class="dropdown-menu" role="menu">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-striped table-hover table-fw-widget dataTable">
				<thead>
					<tr>
						<th style="width:5%;">
                            <div class="custom-control custom-control-sm custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="check5">
                            <label class="custom-control-label" for="check5"></label>
                            </div>
                        </th>
                        <th style="width:20%;">Usuario</th>
                        <th style="width:25%;">Nombre(s)</th>
                        <th style="width:20%;">Apellido(s)</th>
                        <th style="width:20%;">Email</th>
                        <th style="width:10%;">Acciones</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($users as $user)
					<tr class="success done">
						<td>
							<div class="custom-control custom-control-sm custom-checkbox">
								<input class="custom-control-input" type="checkbox" id="check6">
								<label class="custom-control-label" for="check6"></label>
							</div>
						</td>
						<td class="user-avatar cell-detail user-info">
							<img class="mt-0 mt-md-2 mt-lg-0" src="{{ asset($user->avatar) }}" alt="{{ asset($user->name) }}">
							<span>{{ $user->username }}</span>
						</td>
						<td class="cell-detail" data-project="Bootstrap">
							<span>{{ $user->name }}</span>
						</td>
						<td class="cell-detail" data-progress="0,45">
							<span>{{ $user->lastname }}</span>
						</td>
						<td class="cell-detail">
							<span>{{ $user->email }}</span>
						</td>
						<td class="text-right">
							<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Editar">
								<i class="mdi mdi-lead-pencil mdi-18px"></i>
							</a>
							<form action="{{ route('users.destroy', $user) }}" method="post" class="d-inline">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger remove-link" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
									<i class="mdi mdi-trash-can mdi-18px"></i>
								</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
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

	<script src="assets/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/jszip/jszip.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/pdfmake/pdfmake.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/pdfmake/vfs_fonts.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
@endpush