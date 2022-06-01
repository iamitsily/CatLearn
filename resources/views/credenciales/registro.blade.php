@extends('credenciales.plantilla')

@section('title','Registro')
@section('css')

<link rel="stylesheet" href="{{asset('vendor/login/css/style.css')}}">

@endsection
@section('content')

<section class="ftco-section">
	<div class="container">

		<div class="row justify-content-center">
			<div class="col-md-7 col-lg-5">
				<div class="wrap">
					<div class="img" style="background-image: url(vendor/login/images/bg-1.jpg);"></div>
					<div class="login-wrap p-4 p-md-5">
						<div class="d-flex">
							<div class="w-100">
								<h3 class="mb-4">Registro</h3>
							</div>

						</div>
						<form action="" method="POST" class="signin-form">
							@csrf
							<div class="form-group">
								<input id="name" name="name" type="text" class="form-control" required>
								<label class="form-control-placeholder" for="password">Nombre</label>
							</div>
							@error('name')
							<p class="mb-4	text-danger">{{$message}}</p>
							@enderror
							
							
							<div class="form-group mt-3">
								<input type="email" id="email" name="email" class="form-control" required>
								<label class="form-control-placeholder" for="username">Email</label>
							</div>
							@error('email')
							<p class="mb-4	text-danger">{{$message}}</p>
							@enderror
							<div class="form-group mt-3">
								<input type="number" id="number" name="number" class="form-control" required>
								<label class="form-control-placeholder" for="username">Telefono</label>
							</div>
							@error('number')
							<p class="mb-4	text-danger">{{$message}}</p>
							@enderror
							<div class="form-group">
								<input id="password" name="password" type="password" class="form-control" required>
								<label class="form-control-placeholder" for="password">Contraseña</label>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							@error('password')
							<p class="mb-4	text-danger">{{$message}}</p>
							@enderror
						
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary rounded submit px-3">Vamos! </button>
							</div>

						</form>
						<p class="text-center">¿Ya tienes cuenta? <a href="{{url('/sesion')}}">Inicia Sesión</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('script')
<script src="{{asset('vendor/login/js/jquery.min.js')}}"></script>
<script src="{{asset('vendor/login/js/popper.js')}}"></script>
<script src="{{asset('vendor/login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/login/js/main.js')}}"></script>
@endsection