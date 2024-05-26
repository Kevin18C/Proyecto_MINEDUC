<?php

namespace App\Http\Controllers;

use App\Models\Catedratico;
use App\Models\Departamento;
use App\Models\Escuela;
use App\Models\Inscripcion;
use App\Models\Municipio;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
    public function index()
    {
        return view('reportes.index');
    }

    public function reporteAlumnos(Request $request)
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

        return view('reportes.partials.alumnos', compact('alumnos', 'departamentos', 'municipios'));
    }

    public function reporteEscuelas(Request $request)
    {
        $departamento_id = $request->input('id_departamento');
        $municipio_id = $request->input('id_municipio');

        $query = Escuela::query();

        if ($departamento_id) {
            $query->whereHas('municipio', function($q) use ($departamento_id) {
                $q->where('id_departamento', $departamento_id);
            });
        }

        if ($municipio_id) {
            $query->where('id_municipio', $municipio_id);
        }

        $escuelas = $query->with(['municipio.departamento', 'inscripciones.grado' => function($query) {
            $query->withCount('inscripciones');
        }])->get();

        $departamentos = Departamento::all();
        $municipios = Municipio::where('id_departamento', $departamento_id)->get();

        return view('reportes.partials.escuelas', compact('escuelas', 'departamentos', 'municipios'));
    }

    public function reporteCatedraticos()
    {
        $catedraticos = Catedratico::with('inscripciones')->get();
        return view('reportes.partials.catedraticos', compact('catedraticos'));
    }

    public function getMunicipios($departamento_id)
    {
        $municipios = Municipio::where('id_departamento', $departamento_id)->pluck('municipio', 'id');
        return response()->json($municipios);
    }
}
