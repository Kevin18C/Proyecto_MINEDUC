<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_curso',
        'Curso'
    ];

    public function catedraticos()
    {
        return $this->belongsToMany(Catedratico::class, 'curso_catedratico', 'id_curso', 'id_catedratico');
    }
    public function inscripciones()
{
    return $this->hasMany(Inscripcion::class , 'id_curso','curso_inscripcion','id_catedratico');
}
public function actividades()
    {
        return $this->hasMany(Actividad::class, 'id_curso');
    }
    public function horarios()
    {
        return $this->hasMany(HorarioDeClase::class,'id_curso');
    }
}
