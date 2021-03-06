<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Paciente;

//Route::view('/', 'AgendaMedica');

//Ruta de prueba
//Route::get('/blade','PacientesController@blade')->name('blade');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Pacientes*/
//Route::get('/pacientes', 'PacientesController@index')->name('pacientes')->middleware('auth');

//Guardar paciente
//Route::post('/pacientes','PacientesController@store');

Route::prefix('pacientes')->middleware('auth')->group(function () {
    //Muestra todos los pacientes
    Route::get('/', 'PacientesController@index')->name('pacientes');
    //Guardar paciente
    Route::get('/ficha/{id}','PacientesController@ficha')->name('ficha');
});




 
