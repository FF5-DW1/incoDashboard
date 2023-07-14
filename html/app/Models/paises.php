<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paises extends Model
{
    use HasFactory;
    /*protected $fillable = ['nombre'];

    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }*/

    public function inscripcion()
    {
        return $this->belongsTo(alumno::class);
    }
}
