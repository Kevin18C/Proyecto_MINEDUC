<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    protected $table = 'secciones';

    protected $fillable = ['Seccion'];

    // Relación con la tabla Catedraticos
    public function catedraticos()
    {
        return $this->hasMany(Catedratico::class, 'id_seccion');
    }

    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }
}
