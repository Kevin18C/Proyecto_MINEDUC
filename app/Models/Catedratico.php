<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catedratico extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_catedratico', 'id_curso', 'id_grado', 'id_seccion', 'id_escuela'];

    // Relación con la tabla Secciones
    public function seccion()
    {
        return $this->belongsTo(Seccion::class, 'id_seccion');
    }

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'id_catedratico', 'id');
    }

    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }

    public function escuela()
    {
        return $this->belongsTo(Escuela::class, 'id_escuela');
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_catedratico', 'id');
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'curso_catedratico', 'id_catedratico', 'id_curso');
    }
}
