<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class SesionController extends Controller
{   
    //Cargar la vista de inicio de sesion
    public function create(){
        return view('credenciales.iniciosesion');
    }
    
    public function store(){
        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => 'El correo o contraseña es incorrecto!, por favor intente de nuevo.'
            ]);
        } 
        return redirect("/home"); 
    }

    public function destroy(){
        auth()->logout();

        return redirect("/"); 
    }
}
