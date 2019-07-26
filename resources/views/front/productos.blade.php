 @include('front.lista_productos')
@extends('front.template')

@section('pageTitle', 'productos')

@section ('mainContent')
    <!-- Inicio de productos-->

      <h4>Nuestros productos</h4>
      <div class="sellers sellers-prod">

           <div class="row mx-0">
             <div class="card-deck">
              <?php foreach ($productos as $Producto): ?>
                   <div class="card">
                    <img  src= <?= $Producto["imagen"] ?> width="100%"  height="250px">
                     <div style= "background-color: #efe4d5; align-content: center;" class="card-body">
                           <h5 style= "color: #bfb29f; text-align: center;" class="card-title"><?= $Producto["nombre"] ?></h5>
                         <p class="card-text"><small class="text-muted">Ref 2313</small></p>
                         <!-- <strong style="color: red"><?= $Producto["precio"] ?></strong> -->
                         <a href="#" class="btn btn-newsletter">Comprar</a>
                     </div>
                   </div>
               <?php endforeach; ?>
             </div>
           </div>
         </div>
@endsection
