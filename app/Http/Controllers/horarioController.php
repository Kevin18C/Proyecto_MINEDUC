<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use App\Models\HorarioDeClase;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        $grados = Grado::with(['horarios.curso'])->get();

        $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];

        return view('horarios.index', compact('grados', 'dias'));
    }
}
