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
        'grado_id',
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
        return $this->belongsTo(Departamento::class);
    }
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function catedratico()
    {
        return $this->belongsTo(Catedratico::class);
    }
    public function escuela()
    {
        return $this->belongsTo(Escuela::class,'id_escuela');
    }
    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }

}
