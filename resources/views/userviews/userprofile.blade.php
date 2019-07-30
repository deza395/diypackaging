@extends('front.template')

@section('pageTitle')
  Mi perfil - {{$user->name}}
@endsection

@section ('mainContent')


        <div>
          "Bienvenid@!"

  			<h3> <?= $_SESSION["userLoged"] ? 'Hola ' . $_SESSION['userLoged']['nombre'] . '!' : 'Hola!' ?> </h3>
  		 	<h3> <?= $_SESSION["userLoged"] ? 'Tu email es ' . $_SESSION['userLoged']['email'] : '' ?> </h3>
  			<h3> <?= $_SESSION["userLoged"] ? 'Tu usuario es ' . $_SESSION['userLoged']['usuario'] : '' ?> </h3>
  			<img src="<?= $_SESSION["userLoged"] ? "avatars/" . $_SESSION['userLoged']['avatar'] : '' ?>" alt="">

        </div>

    @endsection
