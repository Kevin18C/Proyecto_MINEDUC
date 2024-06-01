<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Catedratico;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Escuela;
use App\Models\Inscripcion;
use App\Models\Tutelar;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()

    {
        $totalAlumnos = Alumno::count(); // Contamos todos los estudiantes
        $totalCatedraticos = Catedratico::count();
        $totalTutelares = Tutelar::count();
        $totalEscuelas = Escuela::count();
        $datosGrafico = $this->getDatosGrafico(); // Obtenemos los datos para el gráfico
        $datosGrafico1= $this->getDatosGrafico1();



        return view('welcome', compact('totalAlumnos','totalCatedraticos','totalTutelares','totalEscuelas','datosGrafico','datosGrafico1'));



    }

    private function getDatosGrafico()
    {
        $alumnosPorMunicipio = Inscripcion::select('id_municipio', DB::raw('COUNT(*) as total'))
            ->groupBy('id_municipio')
            ->get();

        $municipios = Municipio::pluck('municipio', 'id')->all();

        $datos = [
            'labels' => [],
            'data' => []
        ];

        foreach ($alumnosPorMunicipio as $alumno) {
            $datos['labels'][] = $municipios[$alumno->id_municipio];
            $datos['data'][] = $alumno->total;
        }

        return $datos;
    }

    private function getDatosGrafico1()
{
    // Obtener los departamentos con la cantidad de alumnos por departamento
    $alumnosPorDepartamento = Inscripcion::join('municipios', 'inscripciones.id_municipio', '=', 'municipios.id')
        ->join('departamentos', 'municipios.id_departamento', '=', 'departamentos.id')
        ->select('departamentos.departamento as nombre_departamento', 'departamentos.id as id_departamento', DB::raw('COUNT(inscripciones.id) as total'))
        ->groupBy('departamentos.id', 'departamentos.departamento')
        ->get();

    $datos = [
        'labels' => [],
        'data' => []
    ];

    foreach ($alumnosPorDepartamento as $alumno) {
        $datos['labels'][] = $alumno->nombre_departamento;
        $datos['data'][] = $alumno->total;
    }

    return $datos;
}



}

