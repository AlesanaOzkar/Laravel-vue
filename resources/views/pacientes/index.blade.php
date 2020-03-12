@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <h3>Pacientes</h3>
           @foreach ($pacientes as $paciente)
                <p>Paciente {{ $paciente->nombre }}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection
