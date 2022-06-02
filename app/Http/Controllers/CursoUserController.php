<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Encuesta;
use Illuminate\Http\Request;
use App\Models\inscrito;
use App\Models\Leccion;
use App\Models\Tarea;
use App\Models\Examen;
use App\Models\Actividad;
use App\Models\User;
class CursoUserController extends Controller
{
    public function index()
    {
        //Incluye relacion
        $cursos = Curso::all();
        $users = User::all();
        $encuestas = Encuesta::all();
        $inscritos = inscrito::all();
        return view('usuarios.home', compact('cursos', 'encuestas','inscritos','users'));

    }
    public function show(Curso $curso)
    {
        $inscritos = inscrito::all();
        return view('usuarios.detallescursos', compact('curso','inscritos'));
    }
    public function inscribir(Request $request){
        $inscribir = new inscrito($request->all());
        $inscribir->save();
        return redirect('/home');
    }

    public function detalles(Curso $curso)
    {
        return view('usuarios.cursostop', compact('curso'));
    }
    public function leccion(Leccion $leccion){

        return view('usuarios.leccion',compact('leccion'));
    }
    public function encuesta(Encuesta $encuesta)
    {
        return view('usuarios.encuesta', compact('encuesta'));
    }
   public function verTarea($id){

        $tarea=Tarea::find($id);
       return view('usuarios.vertarea',compact('tarea'));
   }
   public function verActividad($id){
       $actividad=Actividad::find($id);
       return view('usuarios.veractividad',compact('actividad'));
   }
   public function verExamen($id){
       $examen=Examen::find($id);
       return view('usuarios.verexamen',compact('examen'));
   }
   
}
