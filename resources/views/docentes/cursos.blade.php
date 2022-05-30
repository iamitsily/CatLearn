@extends('usuarios.plantilla')
@section('title', 'Mis Cursos')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Administra tus cursos como docente</h2>
        <p>Crea o administra tus cursos existentes</p>
    </div>
</div>

<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($cursos as $curso)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">

                <div class="course-item">
                    <img src="/img/cursos/{{$curso->imagen}}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>{{$curso->categoria}}</h4>
                            <p class="price">Curso</p>
                        </div>

                        <h3><a href="{{route('CursoUser.Show',$curso)}}">{{$curso->nombre}}</a></h3>
                        <p>{{$curso->descripcion}}</p>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="{{asset('/img/trainers/trainer-1.jpg')}}" class="img-fluid" alt="">
                                <span>{{$curso->docente}}</span>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                                <i class="bx bx-user"></i>&nbsp;{{$curso->participante}}
                                &nbsp;&nbsp;
                                <i class="bx bx-heart"></i>&nbsp;{{$curso->gusta}}
                            </div>

                        </div>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <a class="btn btn-success" href="/admin/cursos/{{$curso->id}}/edit">Editar</a>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                                <form action="{{route ('cursos.destroy',$curso->id)}}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- End Course Item-->
            @endforeach

        </div>

    </div>
</section><!-- End Courses Section -->
<div class="breadcrumbs">
    <div class="container">
        <h2>Crear Curso</h2>
        <p>Descubre tu nuevo curso, estos estan disponibles para ti. Revisalos e inscribete! uwu</p>
    </div>
</div>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <form action="{{route('cursos.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Id User Encargado</label>
                <input id="id_user" name="id_user" type="text" class="form-control" tabindex="1">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Subtitulo</label>
                <input id="subtitulo" name="subtitulo" type="text" class="form-control" tabindex="1">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Descripción</label>
                <input id="descripcion" name="descripcion" type="textarea" class="form-control" tabindex="2">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Categoria</label>
                <select name="categoria">
                    <option>Español</option>
                    <option>Matematicas</option>
                    <option>Programacion</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Docente</label>
                <input id="docente" name="docente" type="text" class="form-control" tabindex="4">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Participantes</label>
                <input id="participantes" name="participantes" type="number" class="form-control" tabindex="5">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Likes</label>
                <input id="gusta" name="gusta" type="number" class="form-control" tabindex="6">
            </div><br>
            <div>
                <label for="" class="form-label">Imagen</label><br>
                <img id="imgSelect" style="max-height: 300px;"><br><br>
            </div>
            <div class="mb-3">
                <input id="img" name="img" type="file" class="hidden" tabindex="6">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Inicio</label>
                <input id="inicio" name="inicio" type="date" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Fin</label>
                <input id="fin" name="fin" type="date" class="form-control" tabindex="1">
            </div>

            <br>
            <a href="{{url('/home')}}" class="btn btn-secondary" tabindex="5">CANCELAR</a>
            <button type="submit" class="btn btn-success" tabindex="4">GUARDAR</button>
        </form>
    </div>
</section>
@endsection