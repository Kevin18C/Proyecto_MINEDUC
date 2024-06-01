<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{

    use HasFactory;
    protected $fillable = ['Descripcion', 'FechaDelaActividad', 'HoradelaActividad', 'id_curso'];
    protected $table = 'Actividades';
    protected $dates = ['FechaDelaActividad', 'HoradelaActividad'];

    public function getFechaDelaActividadAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getHoradelaActividadAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }

}
