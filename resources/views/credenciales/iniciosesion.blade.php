@extends('credenciales.plantilla')

@section('title','Sesion')

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
								<h3 class="mb-4">Iniciar Sesión</h3>
							</div>

						</div>
						<form action="" method="POST" class="signin-form">
							@csrf
							<div class="form-group mt-3">
								<input type="text" id="email" name="email" class="form-control" required>
								<label class="form-control-placeholder" for="username">Email</label>
							</div>
							<div class="form-group">
								<input id="password" name="password" type="password" class="form-control" required>
								<label class="form-control-placeholder" for="password">Contraseña</label>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							@error('message')
							<p class="mb-4	text-danger">{{$message}}</p>
							@enderror
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary rounded submit px-3">Vamos! </button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50 text-left">
									<label class="checkbox-wrap checkbox-primary mb-0">Recuerdame uwu
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Olvide mi Contraseña</a>
								</div>
							</div>
						</form>
						<p class="text-center">¿No estás registrado? <a href="{{url('/registro')}}">Registrate</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@section('script')
<script src="{{asset('vendor/login/js/jquery.min.js')}}"></script>
<script src="{{asset('vendor/login/js/popper.js')}}"></script>
<script src="{{asset('vendor/login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/login/js/main.js')}}"></script>
@endsection
@endsection