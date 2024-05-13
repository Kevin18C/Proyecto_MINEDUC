<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Catedratico;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Escuela;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()

    {
        $totalAlumnos = Alumno::count(); // Contamos todos los estudiantes
        $totalCatedraticos = Catedratico::count();
        $datosGrafico = $this->getDatosGrafico(); // Obtenemos los datos para el gráfico
        $datosGrafico1= $this->getDatosGrafico1();
        


        return view('welcome', compact('totalAlumnos','totalCatedraticos', 'datosGrafico','datosGrafico1'));



    }

    private function getDatosGrafico()
    {
        $alumnosPorMunicipio = Alumno::select('id_municipio', DB::raw('COUNT(*) as total'))
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

        $alumnosPorDepartamento = Alumno::select('id_departamento', DB::raw('COUNT(*) as total'))
            ->groupBy('id_departamento')
            ->get();

        $departamentos = Departamento::pluck('departamento', 'id')->all();

        $datos = [
            'labels' => [],
            'data' => []
        ];

        foreach ($alumnosPorDepartamento as $alumno) {
            $datos['labels'][] = $departamentos[$alumno->id_departamento];
            $datos['data'][] = $alumno->total;
        }

        return $datos;
    }
}

