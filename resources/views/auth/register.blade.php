<!-- // Incluimos las funciones de registro
// De esta manera tengo el scope a la funciones que necesito -->
@extends('front.template')

@section('pageTitle', 'registro')

@section ('mainContent')

<div class="container1">
	<div class="row">

		<!-- principio del registro-->

		<div class=" col-12">
			<form class="formulario" action="{{url('/register')}}" method="post" enctype="multipart/form-data">
				@csrf
				<h2>Registrarse </h2>

				<label class="campo-formulario">
					<input id="name" type="text" class="form-control @error('nombre') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="nombre" autofocus placeholder="Nombre">
					<div class="invalid-feedback">
						Aquí va el error del Título
					</div>
					@error('nombre')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror

				</label>

				<label class="campo-formulario">
					<input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" placeholder="Username">
					<div class="invalid-feedback">
						Aquí va el error del Título
					</div>
					@error('username')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</label>


				<label class="campo-formulario">
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email">
					<div class="invalid-feedback">
						Aquí va el error del Título
					</div>
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</label>

			<label class="campo-formulario" id="label-provincias">
			<select
			class="form-control @error('country') is-invalid @enderror"
			name="country"
			id="country"
			>
			<option value="">Elegí un país</option>
		</select>
		<div class="invalid-feedback">
			Aquí va el error del Título
		</div>
		@error('pais')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</label>
		<label for="provincia" class="campo-formulario" style="display: none;">
			<select
			class="form-control @error('city') is-invalid @enderror"
			name="city"
			id="city"
			>
			<option value="">Elegí una provincia</option>
		</select>
		<div class="invalid-feedback">
			Aquí va el error del Título
		</div>

		@error('city')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</label>

<label class="campo-formulario">
	<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password"placeholder="Contraseña">
	<div class="invalid-feedback">
		Aquí va el error del Título
	</div>
	@error('password')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
	@enderror
</label>

<label class="campo-formulario">
	<input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirme contraseña">
	<div class="invalid-feedback">
		Aquí va el error del Título
	</div>
</label>

<input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" autocomplete="avatar">
<div class="invalid-feedback">
	Aquí va el error del Título
</div>
@error('avatar')
<span class="invalid-feedback" role="alert">
	<strong>{{ $message }}</strong>
</span>
@enderror
<div >
	<button class="boton"type="submit" name="button">Crear cuenta</button>
</div>
</form>

</div>
<!-- final del registro-->


<script src="/js/fetch.js"></script>
<script src="/js/formValidation.js"></script>
@endsection
