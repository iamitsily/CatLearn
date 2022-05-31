@extends('usuarios.plantilla')

@section('title','Editar Encuesta')

@section('content')

<div class="breadcrumbs">
  <div class="container">
    <h2>Encuesta</h2>
    <p>Edite la encuesta</p>
  </div>
</div>

<section id="courses" class="courses">
  <div class="container" data-aos="fade-up">
    <form action="{{route('nuevaencuesta.update',$Encuesta->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <!-- Name input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">Nombre de la Encuesta</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{$Encuesta->nombre}}"/>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form4Example2">Link del Formulario</label>
        <input type="text" id="link" name="link" class="form-control" value="{{$Encuesta->link}}"/>
      </div>

      <!-- Message input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="descripcion">Descripcion</label>
        <textarea class="form-control" name="descripcion" id="descripcion" rows="4" placeholder="Ingrese descripcion">{{$Encuesta->descripcion}}</textarea>
      </div>
      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Actualizar Encuesta</button>
      <br>
      <a href="{{route('nuevaencuesta.index')}}" class="btn btn-secondary" tabindex="5">Rregresar</a>
    </form>
  </div>
</section>

@endsection
