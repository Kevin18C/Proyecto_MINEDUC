<?php

namespace App\Http\Controllers;

use App\Models\Tutelar;
use Illuminate\Http\Request;

class TutelarController extends Controller
{
    public function index()
    {
        $tutores = Tutelar::all();
        return view('tutores.index', ['tutores' => $tutores]);
    }
    public function create()
    {
        return view('tutores.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_tutelar' => 'required|string|max:255',
            'id_alumno' => 'required|exists:alumnos,id',
        ]);

        // Obtener el ID del alumno del formulario
        $id_alumno = $request->input('id_alumno');

        // Contar cuántos tutores tiene el alumno
        $numero_tutores = Tutelar::where('id_alumno', $id_alumno)->count();

        // Verificar si el número de tutores es menor que 2
        if ($numero_tutores < 2) {
            // Si es menor que 2, se puede agregar un nuevo tutor
            $tutelar = new Tutelar();
            $tutelar->nombre_tutelar = $request->input('nombre_tutelar');
            $tutelar->id_alumno = $id_alumno;
            $tutelar->save();

            return redirect()->route('tutores.index')->with('success', 'Tutor agregado correctamente');
        } else {
            // Si ya hay 2 tutores asociados al alumno, muestra un mensaje de error
            return redirect()->route('tutores.index')->with('error', 'Solo se pueden registrar un máximo de 2 tutelares por alumno.');
        }
    }




    public function destroy($id)
{
    $tutor = Tutelar::findOrFail($id);
    $tutor->delete();

    return redirect()->route('tutores.index')->with('success', 'Tutor eliminado correctamente.');
}

}
