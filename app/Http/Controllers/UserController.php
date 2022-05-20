<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = User::all();
        return view('dash.cruduser.userdash')->with('Users',$Users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.cruduser.nuevouser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required','telefono'=>'required','idrol'=>'required','email'=>'required','password'=>'required'
        ]);
        $User = new User();
        $User->name = $request->get('nombre');
        $User->number = $request->get('telefono');
        $User->id_rol = $request->get('idrol');
        $User->email= $request->get('email');
        $User->password = $request->get('password');
       
        $User->save();

        return redirect("{{url('admin/settings')}}");
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
        $User = User::find($id);
        return view('dash.cruduser.editaruser')->with('user',$User);

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
        
        $curso = User::find($id);
        $curso->nombre = $request->get('nombre');
        $curso->descripcion = $request->get('descripcion');
        $curso->categoria = $request->get('categoria');
        $curso->docente = $request->get('docente');
        $curso->participante = $request->get('participantes');
        $curso->gusta = $request->get('gusta');
        
        if($imagen = $request->file('img')){
            $rutaGuardar = 'img/cursos/';
            $imgCurso = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardar,$imgCurso);
            $curso['imagen'] = $imgCurso;
        }
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
        $curso = User::find($id);
        $curso->delete();
        return redirect("admin/cursos");

    }
}
