<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Departamento;
use App\Models\Seccion;
use App\Models\Grado;
use App\Models\Escuela;
use App\Models\Municipio;
use App\Models\Catedratico;
use App\Models\Inscripcion;

class CreateController extends Controller
{
    public function create()
    {
        $cursos = Curso::all();
        $secciones = Seccion::all();
        $grados = Grado::all();
        $escuelas = Escuela::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $catedraticos = Catedratico::all();
        return view('alumnos.create',compact('catedraticos','cursos','secciones','grados','escuelas','departamentos','municipios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_alumno' => 'required|string|max:255',
            'fecha_de_nacimiento'=>'required|date|max:255',
            'telefono'=>'required|string|max:8',
            'genero' => 'required|string|max:255',
            'id_catedratico' => 'required|integer|exists:catedraticos,id',
            'id_curso' => 'required|integer|exists:cursos,id',
            'id_seccion' => 'required|integer|exists:secciones,id',
            'id_grado' => 'required|integer|exists:grados,id',
            'id_escuela' => 'required|integer|exists:escuelas,id',
            'id_municipio' => 'required|integer|exists:municipios,id',
        ]);

        // Crea un nuevo alumno con los datos validados
        $alumno = new Inscripcion();
        $alumno->nombre_alumno = $request->nombre_alumno;
        $alumno->fecha_de_nacimiento = $request->fecha_de_nacimiento;
        $alumno->telefono =$request->telefono;
        $alumno->genero = $request->genero;
        $alumno->id_catedratico = $request->id_catedratico;
        $alumno->id_curso = $request->id_curso;
        $alumno->id_seccion = $request->id_seccion;
        $alumno->id_grado = $request->id_grado;
        $alumno->id_escuela = $request->id_escuela;
        $alumno->id_municipio = $request->id_municipio;
        $alumno->save();


        return redirect('/alumnos')->with('success', '¡Alumno creado correctamente!');
    }
}
