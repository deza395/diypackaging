 @include('front.lista_productos')
@extends('front.template')

@section('pageTitle', 'productos')

@section ('mainContent')
    <!-- Inicio de productos -->

      <h4>Detalle del producto</h4>
      <div class="sellers sellers-prod">

           <div class="row" >
             <div class="card-deck">
                   <div class="card mx-auto" >
                    <img  src="/img/productos/<?= $producto["image"] ?>" width="100%"  height="250px">
                     <div style= "background-color: #efe4d5; align-content: center;" class="card-body">
                         <h5 style= "color: #bfb29f; text-align: center;" class="card-title"><?= $producto["name"] ?></h5>
                         <p class="card-text">
                           <small class="text-muted">
                             <b>Precio:</b> $ <?= $producto["price"] ?>
                           </small>
                         </p>
                         <p class="card-text"><small class="text-muted"><b>Código:</b> <?= $producto["ref"] ?></small></p>
                         <p class="card-text"><small class="text-muted"><b>Categoría:</b> <?= $producto["category"] ?></small></p>
                         <!-- <strong style="color: red"><?= $producto["precio"] ?></strong> -->
                     </div>
<!-- aca sgregar pop up cuando es uruario y cuando no  -->

                     <a href="#" class="btn btn-newsletter" id="btn-abrir-popup"
                     onclick="event.preventDefault();
                                   document.getElementById('wishlist_form').submit();">Agregar a wishlist</a>


                    @auth
                     <form action="{{route('wishlist.store')}}" id="wishlist_form" method="POST">
                      @csrf
                      <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />
                      <input name="product_id" type="text" value="{{$producto->id}}" hidden />
                    </form>
                    @if (Auth::user()->isAdmin)
                    <form action="/producto/delete/<?= $producto["id"] ?>" id="delete_item_form" method="POST">
                     @csrf
                     <input type="submit" name="delete" value="Borrar" class="btn btn-newsletter">

                     <a href="/producto/editar/<?= $producto["id"]?>" name="edit" class="btn btn-newsletter" >Editar</a>
                    </form>
                   @endif
                    @endauth

                   </div>
             </div>
           </div>


           <div class="overlay" id="overlay">
        			<div class="popup" id="popup">
        				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        			@auth	<h3>tu producto fue agregado a tu wishlist</h3> @endauth
              @guest <h3>para agregar el producto a la wishlist <a href="{{ url('/login') }}"> inicia sesion</a>
              o <a href="{{url('/register')}}"> registrate aca</a> </h3>
                        @endguest
        			</div>
        		</div>
          </div>
         <script src="/js/popup.js"></script>

         </script>
@endsection
