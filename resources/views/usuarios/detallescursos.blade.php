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
                        <img src="{{asset('img/course-details.jpg')}}" class="img-fluid" alt="">
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
                        <a href="{{route('CursoUser.detalles',$curso)}}" class="get-started-btn">Inscribirse</a>
    
                    </div>
                </div>

            </div>
        </section><!-- End Cource Details Section -->
    </main>
@endsection