<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catedratico extends Model
{
    use HasFactory;

    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }
}
