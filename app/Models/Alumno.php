<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_alumno',
        'fecha_de_nacimiento',
        'telefono',
        'genero',
        
    ];

    public function tutelar()
    {
        return $this->belongsTo(Tutelar::class);
    }
    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado');
    }


    public function departamento()
    {
        return $this->belongsTo(Departamento::class,'id_departamento');
    }
    public function municipio()
    {
        return $this->belongsTo(Municipio::class,'id_municipio');
    }

    public function catedratico()
    {
        return $this->belongsTo(Catedratico::class,'id_catedratico');
    }
    public function escuela()
    {
        return $this->belongsTo(Escuela::class,'id_escuela');
    }
    public function seccion()
    {
        return $this->belongsTo(Seccion::class,'id_seccion');
    }
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }

    public function inscripciones()
{
    return $this->hasMany(Inscripcion::class);
}
}
