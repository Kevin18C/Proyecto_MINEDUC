<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class CreateController extends Controller
{
    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_alumno' => 'required|string|max:255',
            'id_catedratico' => 'required|integer|exists:catedraticos,id',
            'id_curso' => 'required|integer|exists:cursos,id',
            'id_seccion' => 'required|integer|exists:secciones,id',
            'id_grado' => 'required|integer|exists:grados,id',
            'id_escuela' => 'required|integer|exists:escuelas,id',
            'id_departamento' => 'required|integer|exists:departamentos,id',
            'id_municipio' => 'required|integer|exists:municipios,id',
        ]);

        // Crea un nuevo alumno con los datos validados
        $alumno = new Alumno();
        $alumno->nombre_alumno = $request->nombre_alumno;
        $alumno->id_catedratico = $request->id_catedratico;
        $alumno->id_curso = $request->id_curso;
        $alumno->id_seccion = $request->id_seccion;
        $alumno->id_grado = $request->id_grado;
        $alumno->id_escuela = $request->id_escuela;
        $alumno->id_departamento = $request->id_departamento;
        $alumno->id_municipio = $request->id_municipio;
        $alumno->save();

        // Redirecciona a alguna página después de guardar el alumno
        return redirect('/alumnos')->with('success', '¡Alumno creado correctamente!');
    }
}
