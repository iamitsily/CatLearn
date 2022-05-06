<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('dash.cursosdash')->with('cursos',$cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.nuevocurso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cursos = new Curso();
        $cursos->nombre = $request->get('nombre');
        $cursos->descripcion = $request->get('descripcion');
        $cursos->categoria = $request->get('categoria');
        $cursos->docente = $request->get('docente');
        $cursos->participante = $request->get('participantes');
        $cursos->gusta = $request->get('gusta');
        
        $cursos->save();

        return redirect("admin/cursos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('dash.editarcurso')->with('curso',$curso);

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
        $curso = Curso::find($id);
        $curso->nombre = $request->get('nombre');
        $curso->descripcion = $request->get('descripcion');
        $curso->categoria = $request->get('categoria');
        $curso->docente = $request->get('docente');
        $curso->participante = $request->get('participantes');
        $curso->gusta = $request->get('gusta');
        
        $curso->save();

        return redirect("admin/cursos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect("admin/cursos");

    }
}
