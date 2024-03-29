<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller
{
    //Cargar la vista de registro
    public function create(){
        return view('credenciales.registro');
    }

    //Para guardar nuevo usuario
    public function store(Request $request){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'number'=> 'required',
            'password' => 'required',
        ]);
        
        $user = User::create(request(['name','email','number','password']));
        $user->assignRole('Usuario');
        auth()->login($user);
       
        return redirect("/home");   
     }
}
