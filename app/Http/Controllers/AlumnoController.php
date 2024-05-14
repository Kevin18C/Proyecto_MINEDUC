<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno; // Asegúrate de importar el modelo Alumno

class AlumnoController extends Controller
{
    public function index()
    {
        // Recuperar los registros de alumnos de la base de datos
        $alumnos = Alumno::all();

        // Pasar los registros recuperados a la vista
        return view('alumnos.index', ['alumnos' => $alumnos]);
    }
    public function eliminar($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente');
    }

}
