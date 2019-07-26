
@extends('front.template')

@section('pageTitle', 'faq')

  @section ('mainContent')


        <!-- Inicio del FAQ -->
        <!-- Inicio Intro del FAQ -->
        <br>
        <h4>
        Estamos para ayudarte</h4>
        <br>
        <!-- Fin Intro del FAQ -->
        <!-- Inicio Preguntas del FAQ -->

        <div class="accordion" id="accordionExample">


          <!-- Inicio Pregunta 1 del FAQ. -->

  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Cómo hago mi pedido?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p>Comprar en <strong>DIY packaging</strong> es muy fácil. Simplemente elegí los productos que quieras comprar, seleccioná la cantidad que necesitás y presioná "Comprar" para confirmar la compra.</p>
        <p>Para comprar en <strong>DIY Packaging</strong> no necesitás registrarte previamente. Podés pasear por nuestra web, elegir el packaging que más te guste y luego iniciar la compra sin necesidad de registrarte. Una vez que comiences el proceso de compra, la misma web te irá pidiendo los datos necesarios para el pago, la facturación y el envío de tu pedido, y al final de dicho proceso habrás quedado debidamente registrado.</p>

        <p>Por supuesto, en cualquier momento podrás acceder a tu cuenta para modificar o eliminar tus datos. Y cualquier inquietud que tengas podés escribirnos a <a href="mailto:consultas@consultas.com.ar"> consultas@consultas.com.ar</a> o llamarnos al 4234234234</p>

        <p>Todos nuestros precios están expresados sin IVA. Al momento de la compra te pediremos tus datos fiscales para generar una factura a nombre de tu empresa. Si sos consumidor final, se aplicará el IVA correspondiente.</p>

      </div>
    </div>
  </div>
  <!-- Fin Pregunta 1 del FAQ. -->
  <!-- Inicio Pregunta 2 del FAQ. -->

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Formas de envío
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">

        <p><b>Encomiendas:</b> Si vivís en el interior de Argentina podemos enviarte tu compra por encomienda desde Retiro.</p>
        <p><b>Envíos por mensajería:</b> Si estás en la Ciudad de Buenos Aires, tenés la opción de recibir tu pedido por mensajería.</p>
        <p><b>Visitanos en nuestro local:</b> Vení a conocernos y retirá tu compra personalmente. Te esperamos en Lima 1111, CABA.
        </p>
        <p align=center>          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3311393278627!2d-58.38386198476982!3d-34.621071280455006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0x950feb519009506e!2sLima+1111%2C+C1073AAW+CABA!5e0!3m2!1ses!2sar!4v1556319128386!5m2!1ses!2sar" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </p>

      </div>
    </div>
  </div>
  <!-- Fin Pregunta 2 del FAQ. -->
  <!-- Inicio Pregunta 3 del FAQ. -->

  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        ¿Cuándo recibiré mi compra?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <p>El tiempo de envío depende del lugar en el que te encuentres y el método de entrega que elijas.
          Por nuestra parte, nos comprometemos a despachar los pedidos en menos de 48 horas hábiles.</p><p>Es importante que tengas en cuenta que el día en que se realiza el pedido no cuenta como día laborable, si el pedido se realiza después de las 11 de la mañana.</p>

<p>¡Atención! Para pedidos especiales, con impresión, la entrega tomará 5 días hábiles.</p>

<p>En el año existen épocas de alta demanda (promociones puntuales, black friday, Navidad, etc) que pueden retrasar los envíos algunos días.</p>
      </div>
    </div>
  </div>
  <!-- Fin Pregunta 3 del FAQ. -->
  <!-- Inicio Pregunta 4 del FAQ. -->

  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Política de devolución
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <p>En DIY Packaging aceptamos devoluciones o cambios dentro del plazo de 14 días hábiles a partir de la recepción del producto, para compras mayores a los $250. Una vez devuelto el producto se creará un vale de descuento que podrás usar en tu próxima compra.</p>

        <p>Para coordinar el cambio o la devolución envianos un correo a consultas@consultas.com.ar indicando el número de pedido. Así podremos enviarte el instructivo para hacer la devolución.</p>
      </div>
    </div>
  </div>
  <!-- Fin Pregunta 4 del FAQ. -->
</div>

        <!-- Fin Preguntas del FAQ -->

@endsection
