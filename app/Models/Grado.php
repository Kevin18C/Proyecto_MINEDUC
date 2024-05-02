<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grados extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_grado',
        'grado'
    ];

    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }
}
