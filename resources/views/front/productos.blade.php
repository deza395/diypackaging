 @include('front.lista_productos')
@extends('front.template')

@section('pageTitle', 'productos')

@section ('mainContent')
    <!-- Inicio de productos -->

      <h4>Nuestros productos</h4>
      <div class="sellers sellers-prod">
        <form class="form-inline" >
          <input class="form-control" placeholder="Buscar" aria-label="Buscar" id="product-search" oninput="filtrarTabla()">
        </form>
           <div class="row mx-0">
             <div class="card-deck">
               @foreach ($productos as $producto)
                   <div class="card" data-card-product="<?= $producto["nombre"] ?>">
                     <img  src="/img/productos/<?= $producto["imagen"] ?>" width="100%"  height="250px">
                     <div style= "background-color: #efe4d5; align-content: center;" class="card-body">
                           <h5 style= "color: #bfb29f; text-align: center;" class="card-title"><?= $producto["nombre"] ?></h5>
                           <p class="card-text"><small class="text-muted"><b>Código:</b> <?= $producto["ref"] ?></small></p>
                           <p class="card-text"><small class="text-muted"><b>Categoría:</b> <?= $producto["categoria"] ?></small></p>
                     </div>
                     <a href="/producto/<?= $producto["id"] ?>" class="btn btn-newsletter">
                      Ver Producto
                     </a>
                   </div>
                   @endforeach
             </div>
           </div>
         </div>

         <script type="text/javascript">
         function filtrarTabla() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("product-search");
            filter = input.value.toLowerCase();
            cardDeck = document.getElementsByClassName('card-deck');
            cards = cardDeck[0].children;

            console.log(cards);

            // Loop through all table rows, and hide those who don't match the search query


            for (i = 0; i < cards.length; i++) {
              card = cards[i];
              if (card) {
                if (card.getAttribute("data-card-product").toLowerCase().indexOf(filter) > -1) {
                  card.style.display = "";
                } else {
                  card.style.display = "none";
                }
              }
            }
          };

         </script>
@endsection
