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
Route::get('/pacientes', 'PacientesController@index')->name('pacientes');

//Guardar paciente
//Route::post('/pacientes','PacientesController@store');

Route::prefix('paciente')->group(function () {
    //Guardar paciente
    Route::get('/ficha/{id}','PacientesController@ficha')->name('ficha');
});




 
