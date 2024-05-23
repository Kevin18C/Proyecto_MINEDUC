<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Inscripcion;
use App\Models\Catedratico;

class AlcatController extends Controller
{
    public function index()
    {
        // Obtener todos los catedráticos
        $catedraticos = Catedratico::withCount('inscripciones')->get();

        return view('catedraticos.alcat', compact('catedraticos'));
    }
}
