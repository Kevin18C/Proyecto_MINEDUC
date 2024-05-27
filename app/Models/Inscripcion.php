<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\InscripcionCreated;

class Inscripcion extends Model
{
    use HasFactory;
    protected $table = 'inscripciones';

    protected $fillable = [
        'nombre_alumno',
        'fecha_de_nacimiento',
        'telefono',
        'genero',
        'id_catedratico',
        'id_seccion',
        'id_grado',
        'id_escuela',
        'id_municipio',
    ];

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'curso_inscripcion', 'id_inscripcion', 'id_curso');
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
    public function catedratico()
    {
        return $this->belongsTo(Catedratico::class, 'id_catedratico', 'id');
    }
    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado');
    }
    public function escuela()
    {
        return $this->belongsTo(Escuela::class, 'id_escuela');
    }
    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio');
    }
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    protected $dispatchesEvents = [
        'created' => InscripcionCreated::class,
    ];
}
