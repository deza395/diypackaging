 @include('front.lista_productos')
@extends('front.template')

@section('pageTitle', 'productos')

@section ('mainContent')
    <!-- Inicio de productos -->

      <h4>Detalle del producto</h4>
      <div class="sellers sellers-prod">

           <div class="row mx-0">
             <div class="card-deck">
                   <div class="card">
                    <img  src="/img/productos/<?= $producto["imagen"] ?>" width="100%"  height="250px">
                     <div style= "background-color: #efe4d5; align-content: center;" class="card-body">
                         <h5 style= "color: #bfb29f; text-align: center;" class="card-title"><?= $producto["nombre"] ?></h5>
                         <p class="card-text">
                           <small class="text-muted">
                             <b>Precio:</b> $ <?= $producto["precio"] ?>
                           </small>
                         </p>
                         <p class="card-text"><small class="text-muted"><b>Código:</b> <?= $producto["ref"] ?></small></p>
                         <p class="card-text"><small class="text-muted"><b>Categoría:</b> <?= $producto["categoria"] ?></small></p>
                         <!-- <strong style="color: red"><?= $producto["precio"] ?></strong> -->
                     </div>
                     <a href="#" class="btn btn-newsletter"
                     onclick="event.preventDefault();
                                   document.getElementById('wishlist_form').submit();">Agregar a wishlist</a>

                     <form action="{{route('wishlist.store')}}" id="wishlist_form" method="POST">
                      @csrf
                      <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />
                      <input name="product_id" type="text" value="{{$producto->id}}" hidden />
                    </form>
                    @if (Auth::user()->isAdmin)
                    <form action="/producto/delete/<?= $producto["id"] ?>" id="delete_item_form" method="POST">
                     @csrf
                     <input type="submit" name="delete" value="Borrar" class="btn btn-newsletter">

                     <a href="/producto/editar/<?= $producto["id"]?>" name="edit" class="btn btn-newsletter">Editar</a>
                    </form>
                   @endif
                   </div>
             </div>
           </div>
         </div>
         </script>
@endsection
