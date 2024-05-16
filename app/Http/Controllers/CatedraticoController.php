<?php

namespace App\Http\Controllers;

use App\Models\Catedratico;
use App\Models\Curso;
use App\Models\Grado;
use App\Models\Seccion;
use Illuminate\Http\Request;

class CatedraticoController extends Controller
{
    public function index()
    {
        $catedraticos = Catedratico::all();
        return view('catedraticos.index', ['catedraticos' => $catedraticos]);
    }

    public function create()
    {
        // Recuperar los cursos, grados y secciones
        $cursos = Curso::all();
        $grados = Grado::all();
        $secciones = Seccion::all();

        return view('catedraticos.create', compact('cursos', 'grados', 'secciones'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_catedratico' => 'required|string|max:255',
            'id_curso' => 'required|exists:cursos,id',
            'id_grado' => 'required|exists:grados,id',
            'id_seccion' => 'required|exists:secciones,id',
        ]);

        // Crear un nuevo catedrático
        Catedratico::create($request->all());

        // Redirigir a la página de inicio o a la página de catedráticos
        return redirect()->route('catedraticos.index')->with('success', 'Catedrático agregado correctamente');
    }
    public function destroy($id)
    {
        $catedratico = Catedratico::findOrFail($id);
        $catedratico->delete();

        return redirect()->route('catedraticos.index')
            ->with('success', 'Catedrático eliminado correctamente');
    }
}
