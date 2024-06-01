<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarioDeExamen extends Model
{

    use HasFactory;

    protected $fillable = ['Curso', 'FechaYHoradelExamen'];
    protected $table = 'Calendario_de_examenes';

    protected $dates = ['FechaYHoradelExamen'];

    public function getFechaYHoradelExamenAttribute($value)
    {
        return Carbon::parse($value);
    }
}
