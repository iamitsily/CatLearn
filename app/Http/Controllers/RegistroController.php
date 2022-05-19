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
    public function store(){

        $this->validate(request(),[
            'name' => 'required',
            'user' => 'required',
            'email' => 'required|email',
            'number'=> 'required',
            'password' => 'required',
        ]);

        $user = User::create(request(['name','user','email','number','password']));

        auth()->login($user);
        return redirect("/home");    }
}
