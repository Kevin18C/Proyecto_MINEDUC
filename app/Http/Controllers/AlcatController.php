<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Catedratico;

class AlcatController extends Controller
{
    public function index()
    {
        // Obtener todos los catedráticos
        $catedraticos = Catedratico::withCount('alumnos')->get();

        return view('catedraticos.alcat', compact('catedraticos'));
    }
}
