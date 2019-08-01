@extends('front.template')

	@section('pageTitle', 'login')

	@section ('mainContent')

	<!-- principio de inicio de sesion -->
	 <div class="col-12">
	 <form class="formulario" action="{{ url('/login') }}" method="POST">
	 @csrf
	 <div class="row">
	 <div class="col-12 ">
	 <h2>Inicie sesión</h2>
	 </div>
	 </div>
	 <div class= "form-group row">
	 <div class="col-12 ">
	 <label for="email">
	 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
	 @error('email')
	 <span class="invalid-feedback" role="alert">
	 <strong>{{ $message }}</strong>
	 </span>
	 @enderror
	 </label>
	 </div>
	 </div>
	 <div class= "form-group row">
	 <div class="col-12 ">
	 <label for="password">
	 <input id="password" type="password" class="form-control" name="password" value="" placeholder="Contraseña"required class="form-control @error('password') is-invalid @enderror" autocomplete="current-password">
	 @error('password')
	 <span class="invalid-feedback" role="alert">
	 <strong>{{ $message }}</strong>
	 </span>
	 @enderror
	 </label>
	 </div>
	 </div>

	 <div class= "form-group row">
	 <div class="col-12 ">
	 <button class="boton"type="submit" name="button">Iniciar sesión</button>
	 @if (Route::has('password.request'))
	 <a class="btn btn-link" href="{{ url('/password/reset') }}">
	 ¿Olvidaste tu contraseña?
	 </a>
	 @endif
	 </div>
	 </div>


	<!-- boton de recordarme -->
	 <div class="form-group row">
	 <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
	 <label class="form-check-label" for="remember">
	 Recordarme
	 </label>
	 </div>
	<!-- Fin boton de recordarme -->

	 </form>
	 <div class="">
	 <a class= "register-link" href="/register">¿No tenés cuenta? Registrate acá</a>
	 </div>
	 </div>
	 </div>
	</div>
	 <!-- final de inicio de sesion-->
	@endsection
