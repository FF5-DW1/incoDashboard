<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 
        'apellido',
        'email', 
        'telefono', 
        'programa', 
        'cprograma', 
        'residencia', 
        'fnacimiento', 
        'residencia', 
        'pnacimiento', 
        'sprofesional', 
        'situacion', 
        'neducacion', 
        'permisoTrabajo', 
        'tienes_ordenador', 
        'cingles',
        'disponibilidad'];
}
