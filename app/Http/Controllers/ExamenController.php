<?php

namespace App\Http\Controllers;

use App\Models\CalendarioDeExamen;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function mostrarExamenes()
    {
        $examenes = CalendarioDeExamen::whereNotNull('FechaYHoradelExamen')
            ->get()
            ->map(function ($examen) {
                return [
                    'curso' => $examen->Curso,
                    'fecha' => Carbon::parse($examen->FechaYHoradelExamen)->format('Y-m-d'),
                    'hora' => Carbon::parse($examen->FechaYHoradelExamen)->format('H:i'),
                ];
            });

        return view('examenes.index', compact('examenes'));
    }
}
