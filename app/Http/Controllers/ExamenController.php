<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leccion;
use App\Models\Examen;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $examen = new Examen();
        $examen->id_leccion  = $request->get('id_leccion');
        $examen->titulo = $request->get('nombre');
        $examen->realizada = $request->get('realizada');
        $examen->fecha_inicio = $request->get('fecha_inicio');
        $examen->fecha_fin = $request->get('fecha_fin');
        $examen->calificacion = $request->get('calificacion');

        $examen->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $examen = Examen::pluck('id', 'titulo', 'realizada', 'fecha_inicio', 'fecha_fin', 'calificacion');
        $leccion = Leccion::find($id);
        return view('docentes.cursos.curdexamenes.index', compact('leccion', 'examen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examen=Examen::find($id);
        return view('docentes.cursos.curdexamenes.editar',compact('examen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $examen = Examen::find($id);
        $examen->titulo = $request->input('nombre');
        $examen->realizada = $request->get('realizada');
        $examen->fecha_inicio = $request->input('fecha_inicio');
        $examen->fecha_fin = $request->input('fecha_fin');
        $examen->calificacion = $request->get('calificacion');
        $examen->update();
        return redirect("/docente/cursos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examen=Examen::find($id);
        $examen->delete();
        return back();
    }
}
