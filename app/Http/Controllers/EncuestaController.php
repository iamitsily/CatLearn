<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Encuesta;
use Illuminate\Support\Facades\Gate;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('docente'),403 or Gate::denies('admin'),403);

        $Encuestas = Encuesta::all();
        return view('docentes.encuestas.encuesta',compact('Encuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encuesta = new Encuesta($request->all());
        $encuesta->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Encuesta $encuesta)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Encuesta = Encuesta::find($id);
        return view('docentes.encuestas.editarencuesta',compact('Encuesta'));
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
        $encuesta = Encuesta::find($id);
        $encuesta->nombre = $request->input('nombre');
        $encuesta->descripcion = $request->input('descripcion');
        $encuesta->link = $request->input('link');
        $encuesta->update();
        return redirect(route('nuevaencuesta.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encuesta=Encuesta::find($id);
        $encuesta->delete();
        return redirect()->route('nuevaencuesta.index');
    }
}
