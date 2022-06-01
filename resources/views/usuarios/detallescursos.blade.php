@extends('usuarios.plantilla')

@section('title','Detalles')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Detalles Curso</h2>
        <p>Descubre tu nuevo curso, estos estan disponibles para ti. Revisalos e inscribete! uwu</p>
    </div>
</div>

<!-- ======= Cource Details Section ======= -->
<section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-8">
                <img src="/img/cursos/{{$curso->imagen}}" class="img-fluid" alt="">
                <h3>{{$curso->nombre}}</h3>
                <p>
                    {{$curso->descripcion}}
                </p>
            </div>
            <div class="col-lg-4">

                <div class="course-info d-flex justify-content-between align-items-center">
                    <h5>Docente</h5>
                    <p>{{$curso->docente}}</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                    <h5>Categoria</h5>
                    <p>{{$curso->categoria}}</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                    <h5>Alumnmos inscritos</h5>
                    <p>{{$curso->participante}}</p>
                </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                    <h5>Likes</h5>
                    <p>{{$curso->gusta}}</p>
                </div>
                <form action="{{route('CursoUser.inscribir')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <input id="nombre" name="id_user" type="text" style="display: none;" class="form-control" tabindex="1" value="{{auth()->user()->id}}">
                    </div>
                    <div class="mb-3">
                        <input id="subtitulo" name="id_curso" style="display: none;" type="text" class="form-control" tabindex="1" value="{{$curso->id}}">
                    </div>
                    <a href="{{url('/home')}}" class="btn btn-secondary" tabindex="5">CANCELAR</a>
                    <button type="submit" class="get-started-btn" 
                    @foreach($inscritos as $inscrito)
                    @if((auth()->user()->id == $inscrito->id_user) and ($curso->id == $inscrito->id_curso))
                    disabled="disabled" style=" border: 2px solid red; background-color: red;"
                    @endif
                    @endforeach
                    tabindex="4">INSCRIBIRME</button>
                   
                </form>
            </div>
        </div>

    </div>
</section><!-- End Cource Details Section -->
</main>
@endsection