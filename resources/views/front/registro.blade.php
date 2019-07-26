<!-- // Incluimos las funciones de registro
// De esta manera tengo el scope a la funciones que necesito -->

<?php require_once 'funciones_registro.php';

  //
  // require_once 'conexion.php';



$paises = [
		'ar' => 'Argentina',
		'bo' => 'Bolivia',
		'br' => 'Brasil',
		'co' => 'Colombia',
		'cl' => 'Chile',
		'ec' => 'Ecuador',
		'pa' => 'Paraguay',
		'pe' => 'Perú',
		'uy' => 'Uruguay',
		've' => 'Venezuela',
	];

$codigopais = "";

// *********************** Empieza la lógica de lo que va a pasar luego de enviar el formuluario*********************
// Primero valido que la variable superglobal $_POST tenga información, si es asi empiezo a validar la informaciónote

if($_POST) {
  //
  // var_dump($_POST);

  //llamo a la función validar() que escribimos arriba que me va a devolver un array de errores, en el caso de que los haya
	$codigopais = $_POST['pais'];
  //creo una variable y almaceno ahí lo que me devuelva la función validar()
  $errores = validar($_POST);

  //var_dump($errores);
  //pregunto si está vació el array de errores
  //si está vacío, quiere decir que pasó las validaciones
  //y almaceno a ese usuario en el json de ususarios





  if(count($errores) == 0) {

        // Guardo la imagen y obtengo el nombre aleatorio con la funciones
        // guardarImagen que declare en funciones_registro.php
  			$nombreImagenAvatar = guardarImagen();

  			// Creo en $_POST una posición "avatar" para guardar el nombre de la imagen
  			$_POST['avatar'] = $nombreImagenAvatar;

   // Llamo la funcion traerUsuariosDelJson que declare en funciones_registro.php
    // $usuariosArray = traerUsuariosDelJson();

    //guardo a mi usuario

    //la función saveUser me retorna un array de usuario (ver en funciones). Le paso el array de usuarios para saber cuantos ya hay
    //registrados  y generar dinamicamente el ID de usuario.
    // $nuevoUsuario = guardarUsuario($_POST,$usuariosArray);
    	  guardarUsuario();

    //para validar que el usuario no esté ya registrado
    //recorro el array de ususuarios usando foreach y si el mail que tengo en el
    // nuevo usuario = mail que tengo en el array , entonces se direcciona al login


    // foreach ($usuariosArray as $usuario) {
    //   if ($usuario["email"] == $nuevoUsuario["email"]) {
    //       header('Location: login.php');
    //       exit();
    //   }
    // }

    //en la útlima posición disponible del array de usuarios, guardo al nuevo usuario
    // $usuariosArray[] = $nuevoUsuario;

    //ahora que ya guardé a mi nuevo usuario, convierto a la lista completa de usuarios en formato Json
    // $todosLosUsuarios = json_encode($usuariosArray);

    //guardo el json completo de los usuarios en el archivo usuarios.json
    // file_put_contents("usuarios.json", $todosLosUsuarios);
    //lo redirecciono al usuario a la página de login para que inicie sesión
    // La redirección usa el "window.location del navegador para llevarte a una nueva URL , descomentar para probar"
    header('Location: login.php');
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--<link rel="stylesheet" href="css/bootstrap-grid.min.css">-->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous">

      <link rel="stylesheet" href="css/registro.css">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous">
  </head>

    <body>



      <div class="container">
        <!-- Inicio del HEADER (contiene solo logo y telefonos) -->
        <?php include("header.php")?>
        <!-- Fin del HEADER -->

        <!-- Inicio del NAVBAR -->
          <?php include("navbar.php")?>
        <!-- Fin del NAVBAR -->


 <div class="container1">
  <div class="row">

  <!--  principio del registro-->

    <div class=" col-12">
      <form class="formulario" action="registro.php" method="post" enctype="multipart/form-data">

           <h2>Registrarse </h2>

            <label class="campo-formulario">
              <input type="text" name="nombre" value="<?= isset($_POST['nombre']) ? $_POST['nombre'] : "" ?>" placeholder="Nombre" >
              <?php if(isset($errores["nombre"])) : ?>

							  <div class="alert alert-danger" role="alert">
                  <?= $errores["nombre"] ?>
                </div>

              <?php endif; ?>
            </label>

             <label class="campo-formulario">
              <input type="text" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : "" ?>" placeholder="Usuario" >
              <?php if(isset($errores["username"])) : ?>

                <div class="alert alert-danger" role="alert">
                  <?= $errores["username"] ?>
                </div>

              <?php endif; ?>
           </label>


            <label class="campo-formulario">
              <input type="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : "" ?>" placeholder="Email" >
              <?php if(isset($errores["email"])) : ?>

								<div class="alert alert-danger" role="alert">
                  <?= $errores["email"] ?>
                </div>

              <?php endif; ?>
            </label>
           <label class="campo-formulario">
             <select class="form-control" name="pais">
               <option value="">Elegí un país</option>
   									<?php foreach ($paises as $codigo => $pais): ?>
   										<option
   											value="<?= $codigo ?>"
   											<?= $codigo == $codigopais ? 'selected' : null; ?>
   										>
   											<?= $pais ?>
   										</option>
   									<?php endforeach; ?>
             </select>

             <?php if(isset($errores["pais"])) : ?>
               <div class="alert alert-danger" role="alert">
                 <?= $errores["pais"] ?>
               </div>
             <?php endif; ?>
          </label>


          <label class="campo-formulario">
            <input type="password" name="password" value="" placeholder="Contraseña" >
            <?php if(isset($errores["password"])) : ?>
              <div class="alert alert-danger" role="alert">
                <?= $errores["password"] ?>
              </div>
            <?php endif; ?>
          </label>
          <label class="campo-formulario">
            <input  type="password" name="confirmPassword" value="" placeholder="Confirmar contraseña" >
            <?php if(isset($errores["confirmPassword"])) : ?>
              <div class="alert alert-danger" role="alert">
                <?= $errores["confirmPassword"] ?>
              </div>
            <?php endif; ?>
          </label>


         <input type="file" name="avatar" value="" placeholder="Usuario" >
				 <?php if(isset($errores["avatar"])) : ?>

					 <div class="alert alert-danger" role="alert">
						 <?= $errores["avatar"] ?>
					 </div>

				 <?php endif; ?>

      <div >
        <button class="boton"type="submit" name="button">Crear cuenta</button>
      </div>
  </form>
  </div>
<!--  final del registro-->

  </div>

</div>
 <!--  final de inicio de sesion-->


 <!-- Inicio FOOTER -->
 <?php include("footer.php") ?>
 <!-- Fin FOOTER -->

</div>

<!-- Código javascript de jquery para poder usar boostrap -->
<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous">

</script>

<!-- Código javascript de bootstrap -->
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
crossorigin="anonymous">
</script>


  </body>
</html>
