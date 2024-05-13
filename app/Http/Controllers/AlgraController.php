<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escuela;
use App\Models\Alumno;

class AlgraController extends Controller
{

    public function index()
    {
        // Obtener todas las escuelas que tienen al menos un alumno
        $escuelas = Escuela::has('alumnos')->with('alumnos')->get();

        // Obtener la cantidad de alumnos por grado para cada escuela
        $escuelas->each(function ($escuela) {
            $alumnos_por_grado = Alumno::select('id_grado')
                ->selectRaw('COUNT(*) as total_alumnos')
                ->where('id_escuela', $escuela->id)
                ->groupBy('id_grado')
                ->get();

            $escuela->alumnos_por_grado = $alumnos_por_grado->pluck('total_alumnos', 'id_grado');
        });

        return view('alumnos.algra', compact('escuelas'));
    }
}
