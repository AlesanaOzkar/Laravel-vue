<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;


class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();

        return view('pacientes/index',['pacientes' => $pacientes]);
    }

    public function blade(){

        //Array chido
        $chido = ['A','B','C','D','E','F'];

        return view('practica',['chido'=>$chido]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required'
        ]);

        //Inicializa un nuevo paciente
        $paciente = new Paciente();
        //Nombre del paciente
        $paciente->nombre = $request->get('nombre');
        //Nombre del paciente
        $paciente->apellido_paterno = $request->get('apellido_paterno');
        //Nombre del paciente
        $paciente->apellido_materno = $request->get('apellido_materno');

        $paciente->fecha_nacimiento = $request->get('fecha_nacimiento');

        //Guarda el paciente
        $paciente->save();
        //Retorna un mensaje
        return 'Paciente creado';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(Pacientes $pacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pacientes $pacientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacientes $pacientes)
    {
        //
    }
}
