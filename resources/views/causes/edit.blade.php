@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">CAUSES</div>

                <div class="card-body">
                    <form action="{{ route('causes.update', $cause) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-row mb-3">
                            <label for="code">Código:</label>
                            <input type="text" name="code" class="form-control" placeholder="Código" value="{{ $cause->code }}">
                        </div>
                        <div class="form-row mb-3">
                            <label for="description">Descripción:</label>
                            <input type="text" name="description" class="form-control" placeholder="Descripción" value="{{ $cause->description }}">
                        </div>
                        <div class="form-row float-right">
                            <a href="{{ url()->previous() }}"><button type="button" class="btn btn-light mr-2">Regresar</button></a>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection