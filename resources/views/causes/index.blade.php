@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">CAUSES</div>

                <div class="card-body">
                    <a href="{{ route('causes.create') }}"><button class="btn btn-primary float-right mb-3">Agregar nuevo</button></a>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <td>Código</td>
                                <td>Descripción</td>
                                <td>Acción</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($causes as $cause)
                                <tr>
                                    <td>{{ $cause->code }}</td>
                                    <td>{{ $cause->description }}</td>
                                    <td>
                                        <a href="{{ route('causes.edit', $cause) }}"><button class="btn btn-warning">Editar</button></a>
                                        <button class="btn btn-danger">Eliminar</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection