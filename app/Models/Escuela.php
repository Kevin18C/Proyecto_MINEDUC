<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    use HasFactory;

    public function alumnos()
    {
        return $this->hasMany(Alumno::class,'id_escuela');
    }
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class,'id_escuela');
    }
}
