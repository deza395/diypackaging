++6599 @include('front.lista_productos')
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
                    <img  src="/img/productos/<?= $producto["image"] ?>" width="100%"  height="250px">
                     <div style= "background-color: #efe4d5; align-content: center;" class="card-body">
                         <label class="card-text">
                           Nombre
                             <input
                              type="text"
                              name="name"
                              value="{{ old('name', $producto->name) }}"
                              class="form-control"
                            >
                         </label>
                         <label class="card-text">
                           Precio en pesos
                             <input
                  						type="text"
                  						name="price"
                  						value="{{ old('price', $producto->price) }}"
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
                           <select class="form-control" name="category">
                              <option value="Caja" <?= $producto["category"] === 'Caja' ? 'selected' : ''?> >Caja</option>
                              <option value="Bolsa" <?= $producto["category"] === 'Bolsa' ? 'selected' : ''?>>Bolsa</option>
                           </select>
                         </label>
                         <label class="card-text">
                         Subcategoría
                         <select class="form-control" name="subcategory">
                            <option value="Liso" <?= $producto["subcategory"] === 'Liso' ? 'selected' : ''?> >Liso</option>
                            <option value="Estampado" <?= $producto["subcategory"] === 'Estampado' ? 'selected' : ''?>>Estampado</option>
                            <option value="Grande" <?= $producto["subcategory"] === 'Grande' ? 'selected' : ''?> >Grande</option>
                            <option value="Chica" <?= $producto["subcategory"] === 'Chica' ? 'selected' : ''?>>Chica</option>
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
