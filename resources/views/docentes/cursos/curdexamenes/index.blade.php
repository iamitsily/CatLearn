@extends('usuarios.plantilla')
@section('title', 'Lecciones')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Examenes</h2>
        <p>En esta seccion puedes revisar los examenes de la leccion <b>{{$leccion->nombre}}</b></p>
    </div>
</div>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-link text-success" href="javascript:history.back(-1)">Opciones</a>
            <a class="nav-link bg-success disabled text-white" href="">Examenes</a>
        </nav>
    </div>
</section>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <table class="table table-striped table-bordered shadow-lg mt-4" id="cursos" style="width:100%">
            <thead class="bg-white text-gray">
                <tr>
                    <th scope="col">Leccion</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Realizada</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Fin</th>
                    <th scope="col">Calificacion</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach($leccion->examen as $exam)
                <tr>
                    <td>{{$leccion->nombre}}</td>
                    <td>{{$exam->titulo}}</td>
                    @if($exam->realizada == 0)
                    <td>Sin realizar</td>
                    @else
                    <td>Realizado</td>
                    @endif
                    <td>{{$exam->fecha_inicio}}</td>
                    <td>{{$exam->fecha_fin}}</td>
                    <td>{{$exam->calificacion}}</td>
                    <td>
                        <form action="{{route ('examen.destroy',$exam->id)}}" method="POST" class="formEliminar">
                            <a class="btn btn-success" href="{{route('examen.edit',$exam->id)}}">Editar</a><br>

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
        <h2>Crear Examen</h2>
        <p>En esta seccion puedes crear los examenes de tu leccion</p>
    </div>
</div>
<br><br>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <form action="{{route('examen.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Leccion | {{$leccion->nombre}}</label>
                <input id="id_user" name="id_leccion" style="display: none;" type="text" class="form-control" tabindex="1" value="{{$leccion->id}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Titulo</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <input id="subtitulo" style="display: none;" name="realizada" type="text" class="form-control" tabindex="1" value="0">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Inicio</label>
                <input id="subtitulo" name="fecha_inicio" type="date" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Fin</label>
                <input id="subtitulo" name="fecha_fin" type="date" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <input id="subtitulo" style="display: none;" name="calificacion" type="text" class="form-control" tabindex="1" value="0">
            </div>
            <br>
            <a href="javascript:history.back(-1)" class="btn btn-secondary" tabindex="5">CANCELAR</a>
            <button type="submit" class="btn btn-success" tabindex="4">GUARDAR</button>
        </form>
    </div>
</section>
@endsection