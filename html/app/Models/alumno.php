<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidos',
        'email',
        'dni_nie_pasaporte',
        'telefono',
        'residente',
        'ciudad_residencia',
        'pais_nacimiento',
        'edad',
        'genero',
        'programa_elegido',
        'canal_captacion',
        'situacion_profesional',
        'situacion_actual',
        'nivel_educacion',
        'permiso_trabajo_es',
        'disponibilidad_ordenador',
        'disponibilidad_horaria',
        'nivel_ingles',
        'presentacion_breve',
        'estado'
        ];

}
