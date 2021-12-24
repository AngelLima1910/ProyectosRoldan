@extends('layout/plantilla')

@section('tituloPagina', 'CRUD con Laravel 8')

@section('contenido')
<div class="card">
    <h5 class="card-header">CRUD con Laravel 8 y MySQL</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif
            </div>
        </div>
        <h5 class="card-title text-center">Lista de personas ingresadas al sistema</h5>
        <p>
            <a href="{{ route("personas.create") }}" class="btn btn-primary">
                <span class="fas fa-user-plus"></span> Agrega nueva persona
            </a>
        </p>
        <hr>
        <p class="card-text">
            <div class="table table-responsive"> 
                <table class="table table-md table-bordered">
                    <thead>
                        <th>Nombre(s)</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Fecha de nacimiento</th>
                        <th>Edita</th>
                        <th>Elimina</th>
                    </thead>
                    <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->paterno }}</td>
                            <td>{{ $item->materno }}</td>
                            <td>{{ $item->fecha_nacimiento }}</td>
                            <td>
                                <form action="{{ route("personas.edit", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="far fa-edit"></span> Edita
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("personas.show", $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span> Elimina
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $datos->links() }}
                </div>
            </div>
        </p>
    </div>
</div>
@endsection