@extends('layouts.plantilladash.vacia')

@section('content')
 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contactanos</h2>
        <p>Si tienes alguna duda o pregunta con gusto te podemos atender en la ubicación del mapa o envia un correo! </p>
      </div>
    </div><!-- End Breadcrumbs -->
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.871023559479!2d-98.12919618528063!3d19.4179778868926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d01f8e62a27079%3A0x97b69109a88aea17!2sFaculty%20of%20Basic%20Sciences%2C%20Engineering%20and%20Technology!5e0!3m2!1sen!2smx!4v1650946335181!5m2!1sen!2smx" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localización</h4>
                <p>Apizaco, Tlaxcala</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contacto@catlearn.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefono:</h4>
                <p>S/N</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Topico" required>
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