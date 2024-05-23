<?php

namespace App\Events;

use App\Models\Inscripcion;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class InscripcionCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $inscripcion;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Inscripcion $inscripcion)
    {
        $this->inscripcion = $inscripcion;
    }
}
