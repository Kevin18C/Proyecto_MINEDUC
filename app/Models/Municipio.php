<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'municipio',
        'id_departamento'

    ];
    public function departamento()
    {
        return $this->belongsTo(Departamento::class,'id_departamento');
    }
    public function alumnos()
    {
        return $this->hasMany(Alumno::class,'id_municipio');
    }
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class,'id_municipio');
    }
    public function escuelas()
    {
        return $this->hasMany(Escuela::class, 'id_municipio');
    }
}
