@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12"> 
        <div class="row seccion-titulo">
            <div class="col-2 d-flex justify-content-center align-items-center">
                <h3 class="titulo">Ficha</h3>
            </div>
            <div class="col-10">
                <nav class="border-radiusmenu navbar navbar-expand-lg navbar-light bg-menu">
                     
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="border-radiusmenu navbar-nav ul-separador" style="background: #dfdfdf ;">
                            <li id="m_ficha" class="ficha border-radiusmenu nav-item margins active show-name d-none d-sm-none d-md-block d-lg-block">
                                <a id="menu_ficha" class="nav-link" href="http://desarrollo.quahr.com/pacientes/ficha/8">Ficha Paciente <span class="sr-only">(current)</span></a>
                            </li> 
                            <li class="li-separador"></li>
                            <li id="m_citas" class="citas nav-item margins ">
                                <a id="menu_citas" class="nav-link" href="http://desarrollo.quahr.com/pacientes/citas/8">Citas</a>
                            </li>
                            <li class="li-separador"></li>
                            <li id="m_odontograma" class="odontograma nav-item margins ">
                                <a id="menu_clinica" class="nav-link" href="http://desarrollo.quahr.com/pacientes/odontograma/8">Ficha Clínica</a>
                            </li>
                            <li class="li-separador"></li>
                            <li id="m_presupuestos" class="presupuestos nav-item margins ">
                                <a id="menu_tratamientos" class="nav-link" href="#">Planes de tratamientos</a>
                            </li>
                            <li class="li-separador"></li>
                            <li id="m_pagos" class="pagos nav-item margins ">
                                <a id="menu_presupuestos" class="nav-link" href="http://desarrollo.quahr.com/pacientes/pagos/8">Pagos</a>
                            </li>
                            <li class="li-separador"></li>
                            <li id="m_archivos" class="archivos border-radiusmenu nav-item margins  ">
                                <a id="menu_documentos" class="nav-link" href="http://desarrollo.quahr.com/pacientes/archivos/8">Imagenes / Documentos</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    <h3>Ficha del paciente  - {{ $paciente->nombre }}</h3>
         

    </div>
</div>
@include('pacientes.partials.mostrarPaciente');
@endsection

