<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Encuesta;
use Illuminate\Http\Request;

class CursoUserController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        $encuestas = Encuesta::all();
        return view('usuarios.home', compact('cursos', 'encuestas'));
    }

    public function show(Curso $curso)
    {
        return view('usuarios.detallescursos', compact('curso'));
    }
    public function detalles(Curso $curso)
    {
        return view('usuarios.cursostop', compact('curso'));
    }
    public function encuesta(Encuesta $encuesta)
    {
        return view('usuarios.encuesta', compact('encuesta'));
    }
   
   
}
