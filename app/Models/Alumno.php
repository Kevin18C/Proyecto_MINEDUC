<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'nombre_alumno',
        'Curso',
        'grado'
    ];

    public function grado()
    {
        return $this->belongsTo(Grados::class);
    }
}
