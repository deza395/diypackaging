 @include('front.lista_productos')
@extends('front.template')

@section('pageTitle', 'productos')

@section ('mainContent')
    <!-- Inicio de productos-->

      <h4>Nuestros productos</h4>
      <div class="sellers sellers-prod">

           <div class="row mx-0">
             <div class="card-deck">
                   <div class="card">
                    <img  src= <?= $producto["imagen"] ?> width="100%"  height="250px">
                     <div style= "background-color: #efe4d5; align-content: center;" class="card-body">
                           <h5 style= "color: #bfb29f; text-align: center;" class="card-title"><?= $producto["nombre"] ?></h5>
                         <p class="card-text"><small class="text-muted"><?= $producto["ref"] ?></small></p>
                         <!-- <strong style="color: red"><?= $producto["precio"] ?></strong> -->
                         <a href="#" class="btn btn-newsletter">Comprar</a>
                     </div>
                   </div>
             </div>
           </div>
         </div>
@endsection
