@extends('usuarios.plantilla')
@section('title', 'Lecciones')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Lecciones</h2>
        <p>En esta seccion puedes revisar las lecciones del curso <b>{{$curso->nombre}}</b></p>
    </div>
</div>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-link text-success" href="javascript:history.back(-1)">Opciones</a>
            <a class="nav-link bg-success disabled text-white" href="">Lecciones</a>
        </nav>
    </div>
</section>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <table class="table table-striped table-bordered shadow-lg mt-4" id="cursos" style="width:100%">
            <thead class="bg-white text-gray">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Información</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach($curso->leccion as $lecc)
                <tr>
                    <td>{{$lecc->nombre}}</td>
                    <td>{{$lecc->informacion}}</td>
                    <td>{{$curso->nombre}}</td>
                    <td>
                        <form action="{{route ('lecciones.destroy',$lecc->id)}}" method="POST" class="formEliminar">
                            <a class="btn btn-success" href="{{route('lecciones.edit',$lecc->id)}}">Editar</a><br>

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
<br><br>
<div class="breadcrumbs">
    <div class="container">
        <h2>Crear Lecciones</h2>
        <p>En esta seccion puedes crear las lecciones de tu curso</p>
    </div>
</div>
<br><br>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <form action="{{route('lecciones.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Curso | {{$curso->nombre}}</label>
                <input id="id_user" name="id_curso" style="display: none;" type="text" class="form-control" tabindex="1" value="{{$curso->id}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Información</label>
                <input id="subtitulo" name="informacion" type="text" class="form-control" tabindex="1">
            </div>
            <br>
            <a href="javascript:history.back(-1)" class="btn btn-secondary" tabindex="5">CANCELAR</a>
            <button type="submit" class="btn btn-success" tabindex="4">GUARDAR</button>
        </form>
    </div>
</section>
@endsection