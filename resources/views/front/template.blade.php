<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">

    <title>@yield('pageTitle')</title>
  </head>

  <body>
    <div class="container">

      <!-- Inicio del HEADER (contiene solo logo y telefonos) -->
       @include('front.header')
      <!-- Fin del HEADER -->

      <!-- Inicio del NAVBAR -->
      @include('front.navbar')
      <!-- Fin del NAVBAR -->
      <div class= 'container'>
      @yield('mainContent')
      </div>

      <!-- Inicio de SOCIAL and Newsletter -->
      <div class="social-newsletter">
        <h4>Newsletter</h4>
        <div class="row">
          <div class="col-md-8">
            <!-- Clases de Boostrap para usar el formulario en linea https://getbootstrap.com/docs/4.0/components/forms/#readonly-plain-text-->
            <form action="" method="">
              <div class="form-group row">
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="newsletter-email" placeholder="Ingresa tu correo">
                </div>
                <div class="col-sm-2">
                  <button type="submit" class="btn btn-newsletter">Suscribirse</button>
                </div>

              </div>
            </form>
          </div>
          <!-- Uso íconos de fontawesome y los agrando usando la clase fa-2x -->
          <div class="col-md-4 social-networks">
            <i class="fab fa-facebook-f fa-2x"></i>
            <i class="fab fa-twitter fa-2x"></i>
            <i class="fab fa-instagram fa-2x"></i>
          </div>
        </div>
      </div>
      <!-- Fin de SOCIAL and Newsletter -->

      <!-- Inicio FOOTER -->
    <footer class="pt-4">

        <!-- Copyright -->
        <div class="footer-copyright py-3">© 2019 Copyright:
          <a href="#"> DIY Packaging </a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Fin FOOTER -->

    </div>

    <!-- jquery para poder usar boostrap -->
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
