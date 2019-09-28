@extends('layouts.app')

@section('content')
<div class="row">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-0 mb-0">
            <li class="breadcrumb-item active">Dependencias</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col py-0">
        <div class="d-flex justify-content-center">
            <a href="{{ route('dependencies.create') }}"><button class="btn btn-primary" type="submit"><i class="mdi mdi-plus-box-outline mdi-18px"></i>Crear</button></a>
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <div class="card shadow-none rounded">
            <div class="table-responsive container-fluid py-3">
                <table class="table table-hover table-sm bg-light">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="rounded-left"><h5>Nombre</h5></th>
                            <th scope="col"><h5>Descripción</h5></th>
                            <th scope="col" class="rounded-right"><h5>Acciones</h5></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dependencies as $dependency)
                        <tr>
                            <td>{{ $dependency->name }}</td>
                            <td>{{ $dependency->description }}</td>
                            <td>
                                <a href="{{ route('dependencies.edit', $dependency->id) }}" class="btn btn-warning"><i class="mdi mdi-lead-pencil mdi-18px"></i></a>
                                <form action="{{ route('dependencies.delete', $dependency) }}" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger remove-link"><i class="mdi mdi-trash-can mdi-18px"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
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