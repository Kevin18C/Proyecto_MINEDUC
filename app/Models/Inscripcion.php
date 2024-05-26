<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\InscripcionCreated;

class Inscripcion extends Model
{
    use HasFactory;
    protected $table = 'inscripciones';

            public function alumno()
        {
            return $this->belongsTo(Alumno::class);
        }
        public function catedratico()
        {
            return $this->belongsTo(Catedratico::class,'id_catedratico', 'id');
        }
            public function grado()
        {
            return $this->belongsTo(Grado::class,'id_grado');
        }
        public function escuela()
        {
            return $this->belongsTo(Escuela::class,'id_escuela');
        }
        public function municipio()
    {
        return $this->belongsTo(Municipio::class,'id_municipio');
    }

protected $dispatchesEvents = [
    'created' => InscripcionCreated::class,
];
}
