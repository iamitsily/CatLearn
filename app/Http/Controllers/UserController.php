<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;


class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('admin'),403);

        $Users = User::all();
//        return view('dash.cruduser.userdash')->with('Users',$Users);
        return view('dash.cruduser.userdash',compact('Users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->pluck('name','id');
        return view('dash.cruduser.nuevouser',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $User = new User();
        $User->name = $request->get('nombre');
        $User->number = $request->get('telefono');
        $User->email= $request->get('email');
        $User->password = $request->get('password');
        if($imagen = $request->file('imagen')){
            $rutaGuardar = 'img/usuarios/';
            $imgCurso = date('YmdHis').".".$imagen->getClientOriginalExtension();
            
            $imagen->move($rutaGuardar,$imgCurso);
            $User['profile_photo_path'] = $imgCurso;
        }   
        $roles = $request->input('roles',[]);
        $User->syncRoles($roles);
        $User->save();

        return redirect("admin/usuarios");
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
        $user = User::find($id);
        
        $roles = Role::all()->pluck('name','id');
        $user->load('roles');
        return view('dash.cruduser.editaruser',compact('user','roles'));

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

        $usuario = User::find($id);
        $usuario->name = $request->input('nombre');
        $usuario->number = $request->input('telefono');
        $usuario->email= $request->input('email');
      
        if($request->hasFile('imagen_curso')){
            $destination = 'img/usuarios/'.$usuario->profile_photo_path;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('imagen_curso');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('img/usuarios/',$filename);
            $usuario->profile_photo_path=$filename;
        }
        
        $roles = $request->input('roles',[]);
        $usuario->syncRoles($roles);
        $usuario->update();
        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        

        if(auth()->user()->id==$usuario->id){
            return redirect()->route('usuarios.index');
        }
        $usuario->delete();
        $destination = 'img/usuarios/'.$usuario->profile_photo_path;
        if(File::exists($destination)){
            File::delete($destination);
        }
        return redirect("admin/usuarios");

    }
}
