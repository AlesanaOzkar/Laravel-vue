<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //Nombre de la tabla
    protected $table = 'pacientes';

    //Campos que son accesibles para insertar 
    protected $fillable = ['nombre','apellido_paterno','apellido_materno'];

    //Campos que no pueden ser modificables
    protected $guarded = [''];
}
