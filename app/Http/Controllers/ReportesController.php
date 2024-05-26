<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Inscripcion;
use App\Models\Municipio;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
    public function index(Request $request)
    {
        $departamento_id = $request->input('id_departamento');
        $municipio_id = $request->input('id_municipio');

        $query = Inscripcion::query();

        if ($departamento_id) {
            $query->whereHas('municipio', function($q) use ($departamento_id) {
                $q->where('id_departamento', $departamento_id);
            });
        }

        if ($municipio_id) {
            $query->where('id_municipio', $municipio_id);
        }

        $alumnos = $query->get();

        $departamentos = Departamento::all();
        $municipios = Municipio::all();

        return view('reportes.index', compact('alumnos', 'departamentos', 'municipios'));
    }
}
