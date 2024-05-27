<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_curso',
        'nombre_curso'
    ];

    public function catedraticos()
    {
        return $this->hasMany(Catedratico::class,' id_catedratico');
    }
    public function inscripciones()
{
    return $this->hasMany(Inscripcion::class , 'id_curso','curso_inscripcion');
}
}
