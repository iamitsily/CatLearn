<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class DocenteCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('docente'),403 or Gate::denies('admin'),403);

        $cursos = Curso::all();
        return view('docentes.cursos.cursos', compact('cursos'));
        
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
        $cursos = new Curso();
        $cursos->id_creador = $request->get('id_user');
        $cursos->nombre = $request->get('nombre');
        $cursos->subtitulo = $request->get('subtitulo');
        $cursos->descripcion = $request->get('descripcion');
        $cursos->categoria = $request->get('categoria');
        $cursos->docente = $request->get('docente');
        $cursos->participante = $request->get('participantes');
        $cursos->gusta = $request->get('gusta');
        $cursos->fecha_inicio = $request->get('inicio');
        $cursos->fecha_fin= $request->get('fin');

        if($imagen = $request->file('img')){
            $rutaGuardar = 'img/cursos/';
            $imgCurso = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardar,$imgCurso);
            $cursos['imagen'] = $imgCurso;
        }
        
        $cursos->save();

        return redirect("docente/cursos");
    
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
        return view('docentes.cursos.modificarcurso',compact('curso'));
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
        $curso->id_user = $request->input('id_user');
        $curso->nombre = $request->input('nombre');
        $curso->subtitulo = $request->input('subtitulo');
        $curso->descripcion= $request->input('descripcion');
        $curso->categoria = $request->input('categoria');
        $curso->docente = $request->input('docente');
        $curso->participante = $request->input('participante');
        $curso->gusta = $request->input('gusta');
        //IMG
        if($request->hasFile('imagen_curso')){
            $destination = 'img/cursos/'.$curso->imagen;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('imagen_curso');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('img/cursos/',$filename);
            $curso->imagen=$filename;
        }
        $curso->fecha_inicio = $request->input('fecha_inicio');
        $curso->fecha_fin = $request->input('fecha_fin');
        
        $curso->update();
        return redirect(route('cursos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso =Curso::find($id);
        $curso->delete(); 
        $destination = 'img/cursos/'.$curso->imagen;
        if(File::exists($destination)){
            File::delete($destination);
        }
        return redirect("docente/cursos");
    }

}
