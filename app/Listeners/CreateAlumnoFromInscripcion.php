<?php

namespace App\Listeners;

use App\Events\InscripcionCreated;
use App\Models\Alumno;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateAlumnoFromInscripcion
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\InscripcionCreated  $event
     * @return void
     */
    public function handle(InscripcionCreated $event)
    {
        Alumno::create([
            'nombre_alumno' => $event->inscripcion->nombre_alumno,
            'fecha_de_nacimiento' => $event->inscripcion->fecha_de_nacimiento,
            'telefono' => $event->inscripcion->telefono,
            'genero' => $event->inscripcion->genero,
            
        ]);
    }
}
