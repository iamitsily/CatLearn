<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Leccion;
use Illuminate\Support\Facades\Gate;

class ActividadController extends Controller
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
        $cursos = new Actividad();
        $cursos->id_leccion = $request->get('id_leccion');
        $cursos->titulo = $request->get('titulo');
        $cursos->fecha_entrga = $request->get('fecha_entrega');
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

        $actividad=Actividad::pluck('id','titulo','fecha_entrega','documento','calificacion','realizada');
        $leccion=Leccion::find($id);
        return view('docentes.cursos.crudactividad.index',compact('leccion','actividad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividad = Actividad::find($id);
        return view('docentes.cursos.crudactividad.editar',compact('actividad'));
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
        $curso = Actividad::find($id);
        $curso->titulo = $request->input('titulo');
        $curso->fecha_entrga = $request->input('fecha_entrega');
        $curso->documento = $request->input('documento');

        $curso->update();
        return redirect("/docente/actividad/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividad=Actividad::find($id);
        $actividad->delete();
        return back();
    }
}
