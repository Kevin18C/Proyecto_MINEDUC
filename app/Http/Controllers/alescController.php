<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escuela;

class alescController extends Controller
{
    public function index()
    {
        $escuelas = Escuela::withCount('inscripciones')
                           ->with('inscripciones')
                           ->has('inscripciones')
                           ->get();

        return view('alumnos.alesc', compact('escuelas'));
    }
}
