<!-- // Incluimos las funciones de registro
// De esta manera tengo el scope a la funciones que necesito -->
@extends('front.template')

@section('pageTitle', 'registro')

@section ('mainContent')

 <div class="container1">
  <div class="row">

  <!--  principio del registro-->

    <div class=" col-12">
      <form class="formulario" action="/registro" method="post" enctype="multipart/form-data">
            @csrf
           <h2>Registrarse </h2>

            <label class="campo-formulario">
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Usuario">

							@error('name')
									<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
									</span>
							@enderror

            </label>

             <label class="campo-formulario">
							 <input id="username" type="tex" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" placeholder="username">

 							@error('username')
 									<span class="invalid-feedback" role="alert">
 											<strong>{{ $message }}</strong>
 									</span>
 							@enderror
           </label>


            <label class="campo-formulario">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="email">

							@error('email')
									<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
									</span>
							@enderror
            </label>
           <label class="campo-formulario">
						 <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" autocomplete="country" placeholder="pais">

						 @error('country')
								 <span class="invalid-feedback" role="alert">
										 <strong>{{ $message }}</strong>
								 </span>
						 @enderror
          </label>


          <label class="campo-formulario">
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password"placeholder="contraseña">

						@error('password')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
						@enderror

          <label class="campo-formulario">
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="confirme contraseña">

          </label>

					<input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" autocomplete="avatar">
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
<!--  final del registro-->
	@endsection
