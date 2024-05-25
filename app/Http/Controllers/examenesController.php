<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class examenesController extends Controller
{
    public function index()
    {
        $preprimariaSchedule = [
            '08:00 - 09:00' => [
                'Lunes' => 'Comunicación y Lenguaje',
                'Martes' => 'Arte',
                'Miércoles' => 'Musica',
                'Jueves' => 'Numeros',
                'Viernes' => 'Deportes',
            ],
            '09:00 - 10:00' => [
                'Lunes' => 'Recreo',
                'Martes' => 'Recreo',
                'Miércoles' => 'Recreo',
                'Jueves' => 'Recreo',
                'Viernes' => 'Recreo',
            ],
            '10:00 - 11:00' => [
                'Lunes' => 'Libre',
                'Martes' => 'Libre',
                'Miércoles' => 'Libre',
                'Jueves' => 'Libre',
                'Viernes' => 'Libre',
            ],
            // Pueden añadirse más horas y cursos según sea necesario
        ];

        $primariaSchedule = [
            '07:00 - 09:00' => [
                'Lunes' => 'Matemáticas',
                'Martes' => 'Comunicación y Lenguaje',
                'Miércoles' => 'Ciencias Sociales',
                'Jueves' => 'Ciencias Naturales',
                'Viernes' => 'Libre',
            ],
            '09:00 - 10:00' => [
                'Lunes' => 'Recreo',
                'Martes' => 'Recreo',
                'Miércoles' => 'Recreo',
                'Jueves' => 'Recreo',
                'Viernes' => 'Libre',
            ],
            '10:00 - 12:00' => [
                'Lunes' => 'Computación',
                'Martes' => 'Expresión Artística',
                'Miércoles' => 'Garífuna',
                'Jueves' => 'Inglés',
                'Viernes' => 'Libre'
            ],
            // Pueden añadirse más horas y cursos según sea necesario
        ];

        return view('examenes.index', compact('preprimariaSchedule', 'primariaSchedule'));
    }
}
