<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    // nombre de la tabla
    protected $table = 'formulario';    
    protected $fillable = [
        'identificacion',
        'nombre_usuario',
        'apellidos',
        'nombres',
        'fecha_nacimiento',
        'celular',
        'telefono',
        'correo',
        'estado_civil',
        'sexo',
        'direccion_ubicacion',
    ];    
    public $timestamps = false;
}
