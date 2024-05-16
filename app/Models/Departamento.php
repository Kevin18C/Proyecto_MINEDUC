<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'departamento'
    ];

    public function municipios()
    {
        return $this->hasMany(Municipio::class,'id_departamento');
    }

    public function alumnos()
    {
        return $this->hasMany(Alumno::class,'id_departamento');
    }
}
