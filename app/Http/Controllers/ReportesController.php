<?php

namespace App\Http\Controllers;

use App\Models\Catedratico;
use App\Models\Departamento;
use App\Models\Escuela;
use App\Models\Grado;
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

    public function reporteCatedraticos(Request $request)
    {
        $departamento_id = $request->input('id_departamento');
        $municipio_id = $request->input('id_municipio');
        $escuela_id = $request->input('id_escuela');
        $grado_id = $request->input('id_grado');

        $query = Catedratico::query();

        if ($departamento_id) {
            $query->whereHas('escuela.municipio', function ($q) use ($departamento_id) {
                $q->where('id_departamento', $departamento_id);
            });
        }

        if ($municipio_id) {
            $query->whereHas('escuela', function ($q) use ($municipio_id) {
                $q->where('id_municipio', $municipio_id);
            });
        }

        if ($escuela_id) {
            $query->where('id_escuela', $escuela_id);
        }

        if ($grado_id) {
            $catedraticos = Catedratico::whereHas('inscripciones', function ($q) use ($grado_id) {
                $q->where('id_grado', $grado_id);
            })->with('inscripciones')->get();
        } else {
            $catedraticos = Catedratico::with('inscripciones')->get();
        }


        $catedraticos = $query->with('inscripciones')->get();

        // Depuración: Verificar los datos obtenidos
        if ($catedraticos->isEmpty()) {
            return response()->json(['message' => 'No se encontraron catedráticos con los filtros aplicados.'], 404);
        }

        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $escuelas = Escuela::all();
        $grados = Grado::all();

        return view('reportes.partials.catedraticos', compact('catedraticos', 'departamentos', 'municipios', 'escuelas', 'grados'));
    }

    public function getMunicipios($departamento_id)
    {
        $municipios = Municipio::where('id_departamento', $departamento_id)->pluck('municipio', 'id');
        return response()->json($municipios);
    }

    public function getEscuelas($municipio_id)
    {
        $escuelas = Escuela::where('id_municipio', $municipio_id)->pluck('Escuela', 'id');
        return response()->json($escuelas);
    }

    public function getEscuelasPorDepartamento($departamento_id)
    {
        $escuelas = Escuela::whereHas('municipio', function ($q) use ($departamento_id) {
            $q->where('id_departamento', $departamento_id);
        })->pluck('Escuela', 'id');
        return response()->json($escuelas);
    }
}
