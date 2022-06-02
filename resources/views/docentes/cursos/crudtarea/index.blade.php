@extends('usuarios.plantilla')
@section('title', 'Tarea')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Tarea</h2>
        <p>En esta seccion puedes revisar las tareas de la leccion <b>{{$leccion->nombre}}</b></p>
    </div>
</div>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-link text-success" href="javascript:history.back(-1)">Editar Leccion</a>
            <a class="nav-link bg-success disabled text-white" href="">Actividades</a>
        </nav>
    </div>
</section>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <table class="table table-striped table-bordered shadow-lg mt-4" id="cursos" style="width:100%">
            <thead class="bg-white text-gray">
                <tr>
                    <th scope="col">Lección</th>
                    <th scope="col">Titulo Tarea</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Fin</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Calificacion</th>
                    <th scope="col">Realizada</th>
                    
                </tr>
            </thead>
            <tbody>

                @foreach($leccion->tarea as $tare)
                <tr>
                    <td>{{$leccion->nombre}}</td>
                    <td>{{$tare->titulo}}</td>
                    <td>{{$tare->descripcion}}</td>
                    <td>{{$tare->fecha_inicio}}</td>
                    <td>{{$tare->fecha_fin}}</td>
                    <td>{{$tare->documento}}</td>
                    <td>{{$tare->calificacion}}</td>
                    <td>{{$tare->realizada}}</td>
                    <td>
                        <form action="{{route ('tarea.destroy',$tare->id)}}" method="POST" class="formEliminar">
                            <a class="btn btn-success" href="{{route('tarea.edit',$tare->id)}}">Editar</a><br>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
<div class="breadcrumbs">
    <div class="container">
        <h2>Crear Tarea</h2>
        <p>En esta seccion puedes crear las tareas de tu leccion</p>
    </div>
</div>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <form action="{{route('tarea.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Leccion | {{$leccion->nombre}}</label>
                <input id="id_user" name="id_leccion" style="display: none;" type="text" class="form-control" tabindex="1" value="{{$leccion->id}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Titulo</label>
                <input id="nombre" name="titulo" type="text" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripcion</label>
                <input id="nombre" name="descripcion" type="text" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Entrega</label>
                <input id="subtitulo" name="fecha_inicio" type="date" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Fin</label>
                <input id="subtitulo" name="fecha_fin" type="date" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Documento</label>
                <input id="subtitulo" name="documento" type="text" class="form-control" tabindex="1">
            </div>
            <input id="subtitulo" style="display: none;" name="calificacion" type="text" class="form-control" tabindex="1" value="0">
            <input id="subtitulo" style="display: none;" name="realizada" type="text" class="form-control" tabindex="1" value="0">
            <br>
            <a href="javascript:history.back(-1)" class="btn btn-secondary" tabindex="5">CANCELAR</a>
            <button type="submit" class="btn btn-success" tabindex="4">GUARDAR</button>
        </form>
    </div>
</section>
@endsection