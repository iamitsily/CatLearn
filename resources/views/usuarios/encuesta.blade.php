@extends('usuarios.plantilla')

@section('title','Encuesta')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>{{$encuesta->nombre}}</h2>
        <p>{{$encuesta->descripcion}}</p>
    </div>
</div>

<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">

    <iframe src="{{$encuesta->link}}" width="100%" height="1500px" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>

    </div>
</section><!-- End Courses Section -->
 
@endsection