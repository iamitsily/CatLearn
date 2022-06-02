<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Leccion;
use Illuminate\Support\Facades\Gate;

class TareaController extends Controller
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
        $cursos = new Tarea();
        $cursos->id_leccion  = $request->get('id_leccion');
        $cursos->titulo = $request->get('titulo');
        $cursos->descripcion = $request->get('descripcion');
        $cursos->fecha_inicio = $request->get('fecha_inicio');
        $cursos->fecha_fin = $request->get('fecha_fin');
        $cursos->documento = $request->get('documento');
        $cursos->calificacion = $request->get('calificacion');
        $cursos->realizada = $request->get('realizada');
        
        $cursos->save();

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
        abort_if(Gate::denies('docente'),403 or Gate::denies('admin'),403);
        $tarea=Tarea::pluck('id','titulo','descripcion','fecha_inicio','fecha_fin','documento','calificacion','realizada');
        $leccion=Leccion::find($id);
        return view('docentes.cursos.crudtarea.index',compact('leccion','tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea=Tarea::find($id);
        return view('docentes.cursos.crudtarea.editar',compact('tarea'));
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
        $tarea = Tarea::find($id);
        $tarea->titulo = $request->input('titulo');
        $tarea->descripcion = $request->input('descripcion');
        $tarea->fecha_inicio = $request->input('fecha_inicio');
        $tarea->fecha_fin = $request->input('fecha_fin');
        $tarea->documento = $request->input('documento');
        $tarea->update();
        return redirect("/docente/tarea/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarea=Tarea::find($id);
        $tarea->delete();
        return back();
    }
}
