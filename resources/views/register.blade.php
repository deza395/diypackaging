<?php

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



// *********************** Empieza la lógica de lo que va a pasar luego de enviar el formuluario*********************
// Primero valido que la variable superglobal $_POST tenga información, si es asi empiezo a validar la informaciónote


  // var_dump($_POST);


?>




      <div class="container">
        <!-- Inicio del HEADER (contiene solo logo y telefonos) -->
        <?php include("header.php")?>
        <!-- Fin del HEADER -->

        <!-- Inicio del NAVBAR -->
          <?php include("navbar.php")?>
        <!-- Fin del NAVBAR -->



@section ('register')
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
