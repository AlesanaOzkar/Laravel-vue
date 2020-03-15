@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12"> 
        <div class="row seccion-titulo">
            <div class="col-12">
                <h3 class="titulo">Pacientes</h3>
            </div>
        </div>


        <table id="pacientes_tabla" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Celular</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $paciente)
                        <tr data-id="{{$paciente->id}}" class="paciente-fila cursor-pointer">
                            <td>{{ $paciente->codigo }}</td>
                            <td>{{ $paciente->user->name }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido_paterno }}</td>
                            <td>{{ $paciente->apellido_materno }}</td>
                            <td>{{ $paciente->telefono_celular }}</td>
                            <td>{{ $paciente->email }}</td>
                        </tr>
 
                    @endforeach
                    
 
                </tbody>
 
            </table>

    </div>
</div>
@include('pacientes.partials.mostrarPaciente');
@endsection

