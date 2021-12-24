@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')

<div class="card">
    <h5 class="card-header">Agrega nuevo registro</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <label for="">Nombre(s)</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Apellido paterno</label>
                <input type="text" name="paterno" class="form-control" required>
                <label for="">Apellido materno</label>
                <input type="text" name="materno" class="form-control" required>
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>
                <br>
                <a href="{{ route("personas.index") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresa
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agrega
                </button>
            </form>
        </p>
    </div>
</div>

@endsection()