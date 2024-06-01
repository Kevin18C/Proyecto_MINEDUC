<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Curso;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function mostrarCalendario()
    {
        $actividades = Actividad::with('curso')
            ->whereNotNull('Fechadelaactividad')
            ->whereNotNull('Horadelaactividad')
            ->get()
            ->map(function ($actividad) {
                return [
                    'title' => $actividad->Descripcion,
                    'fecha' => $actividad->Fechadelaactividad->format('Y-m-d'),
                    'hora' => $actividad->Horadelaactividad->format('H:i'),
                    'curso' => $actividad->curso ? $actividad->curso->Curso : 'Sin curso',
                ];
            });

        $eventos = $actividades->toArray();

        return view('actividades.index', compact('eventos'));
    }

    public function create()
    {
        $cursos = Curso::all();
        return view('actividades.create', compact('cursos'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'Descripcion' => 'required|string',
        'Fechadelaactividad' => 'required|date',
        'Horadelaactividad' => 'required|date_format:H:i',
        'id_curso' => 'required|exists:cursos,id',
    ]);



    Actividad::create($validated);

    return redirect()->route('actividades.create')->with('success', 'Actividad creada exitosamente');
}
}
