@extends('usuarios.plantilla')

@section('title','Casa')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h1>Bienvenido a CatLearn</h1>
        <h3>Usuarios Activos | {{$users->count()}}</h3> 
        <p>Descubre tu nuevo curso, estos estan disponibles para ti. Revisalos e inscribete! uwu</p>
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
                                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                <span>{{$curso->docente}}</span>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                                <i class="bx bx-user"></i>&nbsp;{{$curso->participante}}
                                &nbsp;&nbsp;
                                <i class="bx bx-heart"></i>&nbsp;{{$curso->gusta}}
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
        <h2>Mis Cursos</h2>
        <p>Continua desde lo dejaste, tus cursos en una sola sección</p>
    </div>
</div>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($inscritos as $inscrito)
            @if(auth()->user()->id == $inscrito->id_user)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="course-item">
                    <img src="/img/cursos/{{$cursos[$inscrito->id_curso-1]->imagen}}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>{{$cursos[$inscrito->id_curso-1]->categoria}}</h4>
                            <p class="price">Curso</p>
                        </div>

                        <h3><a href="{{route('CursoUser.detalles',$cursos[$inscrito->id_curso-1])}}">{{$cursos[$inscrito->id_curso-1]->nombre}}</a></h3>
                        <p>{{$cursos[$inscrito->id_curso-1]->descripcion}}</p>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                <span>{{$cursos[$inscrito->id_curso-1]->docente}}</span>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                                <i class="bx bx-user"></i>&nbsp;{{$cursos[$inscrito->id_curso-1]->participante}}
                                &nbsp;&nbsp;
                                <i class="bx bx-heart"></i>&nbsp;{{$cursos[$inscrito->id_curso-1]->gusta}}
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- End Course Item-->
            @endif
            @endforeach


        </div>

    </div>
</section><!-- End Courses Section -->
<div class="breadcrumbs">
    <div class="container">
        <h2>Encuestas Disponibles</h2>
        <p>Tomate unos minutos para responder esta sencilla encuesta</p>
    </div>
</div>

<section id="courses" class="courses">

    <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach($encuestas as $encuesta)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$encuesta->nombre}}</h5>
                        <p class="card-text">{{$encuesta->descripcion}}</p>
                        <a class="active" href="{{route('CursoUser.encuesta',$encuesta)}}">RESPONDER</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div> <!-- End Course Item-->
    </div>
    </div>
</section><!-- End Courses Section -->

@endsection