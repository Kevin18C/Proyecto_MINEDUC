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
        'grado_id', // Cambiado de 'grado' a 'grado_id' para reflejar la relación con la tabla 'grados'
    ];

    public function tutelar()
    {
        return $this->belongsTo(Tutelar::class);
    }

    public function grado()
    {
        return $this->belongsTo(Grado::class, 'grado_id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
}
