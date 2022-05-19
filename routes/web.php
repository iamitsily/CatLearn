<?php

//Librerias
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;

/*
|--------------------------------------------------------------------------
| Routas web
|--------------------------------------------------------------------------
|
| Aqui se crean las rutas para CatLearn
|
*/

//Ruta principal, lo que se despliega al inicio de la pagina
Route::get('/', function () {
    return view('generales.dashcat.index');
});
//Ruta para ir al modulo de soporte
Route::get('/soporte', function () {
    return view('layouts.soportecat.soporteindex');
});
//Ruta para ir a los cursos
Route::get('/cursos', function () {
    return view('generales.cursoscat.indexcursos');
});
//Ruta para ir a la info de los cursos
Route::get('/infocursos', function () {
    return view('generales.cursoscat.detallescursos');
});
//Ruta para ir a continuar un curso
Route::get('/micurso', function () {
    return view('generales.cursoscat.cursostop');
});
//Ruta para ir a contacto
Route::get('/contacto', function () {
    return view('generales.dashcat.contacto');
});
//Ruta para ir a docentes
Route::get('/docentes', function () {
    return view('generales.dashcat.docentes');
});

//Rutas para login y registro para usuarios y docentes
//Login
Route::get('/sesion',[SesionController::class,'create'])->name('sesion.index');
Route::post('/sesion',[SesionController::class,'store'])->name('sesion.store');
Route::get('/logout',[SesionController::class,'destroy'])->name('sesion.destroy');

Route::get('/registro',[RegistroController::class,'create'])->name('registro.index');
Route::post('/registro',[RegistroController::class,'store'])->name('registro.store');


//Una vez logeados views del ususario
//Home
Route::get('/home', function () {
    return view('usuarios.home');
})->middleware('auth');

//Rutas que requieren autentificacion para administrador
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/admin', function () {
        return view('dash.index');
    })->name('dash');

    
    Route::get('/admin/cursos/nuevo', function () {
        return view('dash.nuevocurso');
    })->name('cursosnuevo');
    Route::get('/admin/cursos/editar', function () {
        return view('dash.editarcurso');
    })->name('cursoseditar');

    Route::get('/admin/usuarios/nuevo', function () {
        return view('dash.cruduser.nuevouser');
    })->name('usernuevo');
    Route::get('/admin/usuarios/editar', function () {
        return view('dash.cruduser.editaruser');
    })->name('usereditar');
    
    //Regresar vista crud del controlador de los cursos
    Route::resource('/admin/cursos','App\Http\Controllers\CursoController');
    //Regresar vista crud del controlador de los Usuarios
    Route::resource('/admin/settings','App\Http\Controllers\UserController');
    
});