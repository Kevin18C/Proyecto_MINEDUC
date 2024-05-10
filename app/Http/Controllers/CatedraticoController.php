<?php

namespace App\Http\Controllers;

use App\Models\Catedratico;
use Illuminate\Http\Request;

class CatedraticoController extends Controller
{
    public function index()
    {
        $catedraticos = Catedratico::all();
        return view('catedraticos.index', ['catedraticos' => $catedraticos]);
    }
}
