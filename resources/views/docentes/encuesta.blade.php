@extends('usuarios.plantilla')

@section('title','Crear Encuesta')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Encuesta</h2>
        <p>Genere una encuesta para sus alumnos</p>
    </div>
</div>

<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">

    <form action="{{route('encuesta.store)}}">
        @csrf
  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="nombre" class="form-control" />
    <label class="form-label" for="form4Example1">Nombre de la Encuesta</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="link" class="form-control" />
    <label class="form-label" for="form4Example2">Link del Formulario</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
    <label class="form-label" for="descripcion">Descripcion</label>
  </div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Publicar Encuesta</button>
</form>

    </div>
</section><!-- End Courses Section -->
 
@endsection