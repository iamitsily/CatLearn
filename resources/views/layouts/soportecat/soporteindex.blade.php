@extends('layouts.plantilladash.vacia')
@section('title', 'Soporte')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="container">
        <h2>Soporte</h2>
        <p>Hola!, Desde este lugar puedes enviar tus reportes o feedback que tengas respecto a la plataforma. No te preocupes repondemos pronto!</p>
    </div>
</div> <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
      
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

        

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="aqui el modelo" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Reporte" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje se envío. Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection