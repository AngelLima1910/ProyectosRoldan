@extends('layout/plantilla')

@section("tituloPagina", "Eliminar un registro")

@section('contenido')

<div class="card">
    <h5 class="card-header">Eliminar un registro!</h5>
    <div class="card-body">
        <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¿Estas seguro de eliminar el registro?
            <table class="table table-md table-hover table-bordered" style="background-color: azure;">
                <thead>
                    <th>Nombre(s)</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Fecha de nacimiento</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $personas->nombre }}</td>
                        <td>{{ $personas->paterno }}</td>
                        <td>{{ $personas->materno }}</td>
                        <td>{{ $personas->fecha_nacimiento }}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route("personas.index") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresa
                </a>
                <button class="btn btn-danger">
                    <span class="fas fa-user-times"></span> Elimina
                </button>
            </form>
        </div>
        </p>
    </div>
</div>

@endsection()