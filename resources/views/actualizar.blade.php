@extends('layout/plantilla')

@section("tituloPagina", "Actualizar un registro")

@section('contenido')

<div class="card">
    <h5 class="card-header">Actualiza un registro existente</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route("personas.update", $personas->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nombre(s)</label>
                <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}">
                <label for="">Apellido paterno</label>
                <input type="text" name="paterno" class="form-control" required value="{{$personas->paterno}}">
                <label for="">Apellido materno</label>
                <input type="text" name="materno" class="form-control" required value="{{$personas->materno}}">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required value="{{$personas->fecha_nacimiento}}">
                <br>
                <a href="{{ route("personas.index") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresa
                </a>
                <button class="btn btn-warning">
                    <span class="far fa-edit"></span> Actualiza
                </button>
            </form>
        </p>
    </div>
</div>

@endsection()