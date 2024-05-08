<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutelar extends Model
{
    use HasFactory;

    protected $table = 'tutelar_alumno';

    protected $fillable = ['nombre_tutelar', 'id_alumno'];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'id_alumno');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($tutelar) {
            if ($tutelar->alumno()->count() >= 2) {
                return false; // No permitir crear más de dos asociaciones de alumno por tutelar
            }
        });
    }
}
