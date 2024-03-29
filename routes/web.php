<?php

//Librerias

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\CursoUserController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\DocenteCursoController;
use App\Http\Controllers\EncuestaAdmin;
use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\LeccionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Gate;

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
Route::get('/sesion', [SesionController::class, 'create'])->name('sesion.index');
Route::post('/sesion', [SesionController::class, 'store'])->name('sesion.store');
Route::get('/logout', [SesionController::class, 'destroy'])->name('sesion.destroy');

Route::get('/registro', [RegistroController::class, 'create'])->name('registro.index');
Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');



//Rutas que requieren autentificacion para administrador
Route::middleware([
    'auth:sanctum',
    /*
    config('jetstream.auth_session'),
    'verified'*/
])->group(function () {

    //*****Rutas admin*****

    //Rutas para las estadisticas
    Route::resource('/admin/estadisticas', EstadisticasController::class);
    //Rutas para los roles
    Route::resource('/admin/roles', RoleController::class);
    //Ruta para los permisos
    Route::resource('/admin/permisos', PermissionController::class);
    //Regresar vista crud del controlador de los cursos
    Route::resource('/admin/nuevocurso', CursoController::class);
    //Regresar vista crud del controlador de los Usuarios
    Route::resource('/admin/usuarios', UserController::class);
    //Ver encuestas y crear nuevas desde admin
    Route::resource('/admin/encuestas', EncuestaAdmin::class);

    Route::get('/admin', function () {
        abort_if(Gate::denies('admin'),403);
        return view('dash.index');
    })->name('dash');

    //******Rutas home******
    //Rutas para los cursos del docente
    Route::resource('/docente/cursos', DocenteCursoController::class);
    //Rutas para lecciones del docente
    Route::resource('/docente/lecciones',LeccionController::class);
    //Rutas para las actividades
    Route::resource('/docente/actividad',ActividadController::class);
    //Rutas para las tareas
    Route::resource('/docente/tarea',TareaController::class);
    //Ruta para los examenes
    Route::resource('/docente/examen',ExamenController::class);
    //Encuesta
    Route::resource('/nuevaencuesta', EncuestaController::class);

    //Una vez logeados views del ususario
    //Home
    //Mi perfil
    Route::get('/docente/estadistica', function () {
        return view('profile.show');
    });

    Route::get('/home', [CursoUserController::class, 'index'])->middleware('auth')->name('CursoUser.index');

    //Ruta para ir a la info de los cursos
    Route::get('/infocursos{curso}', [CursoUserController::class, 'show'])->name('CursoUser.Show');

    //Ruta para ir a continuar un curso
    Route::get('/micurso{curso}', [CursoUserController::class, 'detalles'])->name('CursoUser.detalles');

    //Ruta para ver la lección de un curso
    Route::get('/curso/leccion{leccion}',[CursoUserController::class,'leccion'])->name('CursoUser.leccion');

    //Ruta para ver la tarea
    Route::get('/curso/tarea{tarea}',[CursoUserController::class,'verTarea'])->name('CursoUser.tarea');

    //Ruta para ver la actividad
    Route::get('/curso/actividad{actividad}',[CursoUserController::class,'verActividad'])->name('CursoUser.actividad');

    //Ruta para ver el examen
    Route::get('/curso/examen{examen}',[CursoUserController::class,'verExamen'])->name('CursoUser.examen');

    //Ruta para inscribirse
    Route::post('/infocurso/inscribir', [CursoUserController::class, 'inscribir'])->name('CursoUser.inscribir');

    //Ruta par mostrar las encuestas disponibles
    Route::get('/encuesta{encuesta}', [CursoUserController::class, 'encuesta'])->name('CursoUser.encuesta');
});
