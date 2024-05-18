<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class horarioController extends Controller
{
    public function index()
    {
        $preprimariaSchedule = [
            '08:00 - 09:00' => [
                'Lunes' => 'Comunicación y Lenguaje',
                'Martes' => 'Juegos',
                'Miércoles' => 'Arte',
                'Jueves' => 'Música',
                'Viernes' => 'Deportes',
            ],
            '09:00 - 10:00' => [
                'Lunes' => 'Música',
                'Martes' => 'Deportes',
                'Miércoles' => 'Juegos',
                'Jueves' => 'Arte',
                'Viernes' => 'Comunicación y Lenguaje',
            ],
            '10:00 - 11:00' => [
                'Lunes' => 'Comunicación y lenguaje',
                'Martes' => 'Deporte',
                'Miércoles' => 'Juegos',
                'Jueves' => 'Arte',
                'Viernes' => 'Música',
            ],
            // Pueden añadirse más horas y cursos según sea necesario
        ];

        $primariaSchedule = [
            '07:00 - 08:00' => [
                'Lunes' => 'Matemáticas',
                'Martes' => 'Comunicación y Lenguaje',
                'Miércoles' => 'Ciencias Sociales',
                'Jueves' => 'Ciencias Naturales',
                'Viernes' => 'Inglés',
            ],
            '08:00 - 09:00' => [
                'Lunes' => 'Comunicación y Lenguaje',
                'Martes' => 'Garífuna',
                'Miércoles' => 'Educación Física',
                'Jueves' => 'Matemáticas',
                'Viernes' => 'Expresión Artística',
            ],
            '09:00 - 10:00' => [
                'Lunes' => 'Computación',
                'Martes' => 'Matemáticas',
                'Miércoles' => 'Ciencias Sociales',
                'Jueves' => 'Ciencias Naturales',
                'Viernes' => 'Garífuna',
            ],
            '10:00 - 11:00' => [
                'Lunes' => 'Comunicación y Lenguaje',
                'Martes' => 'Matemáticas',
                'Miércoles' => 'Garífuna',
                'Jueves' => 'Expresión Artística',
                'Viernes' => 'Inglés',
            ],
            '11:00 - 12:00' => [
                'Lunes' => 'Inglés',
                'Martes' => 'Computación',
                'Miércoles' => 'Ciencias Sociales',
                'Jueves' => 'Ciencias Naturales',
                'Viernes' => 'Comunicación y Lenguaje',
            ],
            // Pueden añadirse más horas y cursos según sea necesario
        ];

        return view('horarios.index', compact('preprimariaSchedule', 'primariaSchedule'));
    }
}
