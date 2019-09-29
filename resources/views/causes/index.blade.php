@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"/>
@endpush
@section('header')
    <h2 class="page-head-title">Causas</h2>
@endsection
@section('content')
    <div class="card card-table">
		<div class="card-header">
			<div class="d-flex justify-content-center">
				<a class="btn btn-rounded btn-space btn-primary" href="{{ route('causes.create') }}">
					<i class="icon zmdi zmdi-account-add icon-left zmdi-hc-5x"></i>
					Nueva
				</a>
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
                        <th style="width:35%;">Código</th>
                        <th style="width:40%;">Descripción</th>
                        <th style="width:10%;">Acciones</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($causes as $cause)
					<tr class="success done">
						<td>
							<div class="custom-control custom-control-sm custom-checkbox">
								<input class="custom-control-input" type="checkbox" id="check6">
								<label class="custom-control-label" for="check6"></label>
							</div>
						</td>
						<td class="cell-detail" data-project="Bootstrap">
							<span>{{ $cause->code }}</span>
						</td>
						<td class="cell-detail" data-project="Bootstrap">
							<span>{{ $cause->description }}</span>
						</td>
						<td class="text-right">
							<a href="{{ route('causes.edit', $cause->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Editar"><i class="mdi mdi-lead-pencil mdi-18px"></i></a>
							<form action="{{ route('causes.destroy', $cause) }}" method="post" class="d-inline">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger remove-link" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="mdi mdi-trash-can mdi-18px"></i></button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
        </div>
    </div>
@endsection
@push('inline-scripts')
    @if (session('message-store'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            Toast.fire({
                type: 'success',
                title: 'Dependencia creada'
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
                title: '¿Deseas eliminar esta dependencia?',
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
                        'Esta dependencia se eliminará para siempre.',
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
                title: 'Dependencia Editada'
            });
        </script>
    @endif
@endpush