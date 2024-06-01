<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioDeClase extends Model
{
    use HasFactory;
    protected $table = 'horario_de_clase';

    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }
    
}
