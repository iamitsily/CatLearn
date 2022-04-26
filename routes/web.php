<?php

//Librerias
use Illuminate\Support\Facades\Route;

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
    return view('dashcat.index');
});
//Ruta para ir al modulo de soporte
Route::get('/soporte', function () {
    return view('soportecat.soporteindex');
});
//Ruta para ir a los cursos
Route::get('/cursos', function () {
    return view('cursoscat.indexcursos');
});
//Ruta para ir a la info de los cursos
Route::get('/infocursos', function () {
    return view('cursoscat.detallescursos');
});
//Ruta para ir a continuar un curso
Route::get('/micurso', function () {
    return view('cursoscat.cursostop');
});
//Ruta para ir a contacto
Route::get('/contacto', function () {
    return view('dashcat.contacto');
});
//Ruta para ir a docentes
Route::get('/docentes', function () {
    return view('dashcat.docentes');
});
//Rutas que requieren autentificacion
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
});