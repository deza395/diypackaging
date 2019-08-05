 @include('front.lista_productos')
@extends('front.template')

@section('pageTitle', 'productos')

@section ('mainContent')
    <!-- Inicio de productos -->

      <h4>Nuestros productos</h4>
      <div class="sellers sellers-prod">

           <div class="row mx-0">
             <div class="card-deck">
                   <div class="card">
                     @if (Auth::user()->isAdmin)
                     <form action="/producto/editar/<?= $producto["id"] ?>" id="update_item_form" method="POST">
                       @csrf
                    <img  src="/img/productos/<?= $producto["imagen"] ?>" width="100%"  height="250px">
                     <div style= "background-color: #efe4d5; align-content: center;" class="card-body">
                         <label class="card-text">
                           Nombre
                             <input
                              type="text"
                              name="nombre"
                              value="{{ old('nombre', $producto->nombre) }}"
                              class="form-control"
                            >
                         </label>
                         <label class="card-text">
                           Precio en pesos
                             <input
                  						type="text"
                  						name="precio"
                  						value="{{ old('precio', $producto->precio) }}"
                  						class="form-control"
                  					>
                         </label>
                         <label class="card-text">
                           Código del producto
                           <input
                            type="text"
                            name="ref"
                            value="{{ old('ref', $producto->ref) }}"
                            class="form-control"
                          >
                         </label>
                         <label class="card-text">
                           Categoría
                           <select class="form-control" name="categoria">
                              <option value="Caja" <?= $producto["categoria"] === 'Caja' ? 'selected' : ''?> >Caja</option>
                              <option value="Bolsa" <?= $producto["categoria"] === 'Bolsa' ? 'selected' : ''?>>Bolsa</option>
                           </select>
                         </label>
                     </div>
                     <input type="submit" name="update" value="Guardar cambios" class="btn btn-newsletter">

                     <a href="/producto/<?= $producto["id"]?>" name="back" class="btn btn-newsletter">Volver</a>
                    </form>
                   @endif
                   </div>
             </div>
           </div>
         </div>
         <script type="text/javascript" src="js/editProduct.js">

         </script>
@endsection
