<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Leccion;
use Illuminate\Support\Facades\Gate;

class LeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Sin usar
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Sin uasr
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cursos = new Leccion();
        $cursos->id_curso = $request->get('id_curso');
        $cursos->nombre = $request->get('nombre');
        $cursos->informacion = $request->get('informacion');

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

        //$leccion=Leccion::find($id);
        //$curso=Curso::pluck('id','nombre');
        $leccion=Leccion::pluck('id','nombre');
        $curso=Curso::find($id);
        return view('docentes.cursos.crudleccion.index',compact('curso','leccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leccion = Leccion::find($id);
        return view('docentes.cursos.crudleccion.editar',compact('leccion'));
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
        $curso = Leccion::find($id);
        $curso->nombre = $request->input('nombre');
        $curso->informacion = $request->input('informacion');

        $curso->update();
        return redirect("/docente/lecciones/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leccion=Leccion::find($id);
        $leccion->delete();
        return back();
    }
}
