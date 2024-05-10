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
}
