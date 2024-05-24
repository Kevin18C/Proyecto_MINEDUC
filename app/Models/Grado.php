<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_grado',
        'Grado'
    ];
    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'id_grado');
    }

    public function catedraticos()
    {
        return $this->hasMany(Catedratico::class,'id_grado');
    }
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class,'id_grado');
    }
}
