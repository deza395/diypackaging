@extends('front.template')

@section('pageTitle')
  Mi perfil - {{Auth::user()->nombre}}
@endsection

@section ('mainContent')
<div class="row pt-2">
  <!-- Tarjeta con info de perfil -->
  <div class="col-sm-4">
    <div class="card bg-transparent">
      <div class="p-4">
        <p>Hola, <b>{{Auth::user()->name}}!</b></p>
        <p>Tu email es <b>{{Auth::user()->email}}</b></p>
        <p>Tu usuario es  <b>{{Auth::user()->username}}</b></p>

        <img src="/storage/avatars/{{Auth::user()->avatar}}" alt="" width="300px">
      </div>

    </div>
  </div>
  <!-- Sección dinámica. Si es admin muestra opción de cargar un producto, sino la wishlist -->
  <div class="col-sm-8">
    @if (Auth::user()->isAdmin)
    <div class="">
      <div class="card bg-transparent">
        <div class="p-4">
          <h4>Cargar Productos</h4>
          <form class="" action="{{url('/perfil')}}" method="POST">
            @csrf
            <label class="campo-formulario d-block" for="name">
              <input
              type="text"
              name="name"
              class="form-control @error('name') is-invalid @enderror"
              value="{{old('name')}}"
              placeholder="Nombre del producto">
              @error('name')
    					<span class="invalid-feedback" role="alert">
    						<strong>{{ $message }}</strong>
    					</span>
    					@enderror
            </label>
            <label class="campo-formulario d-block" for="price">
              <input
              type="text"
              name="price"
              class="form-control @error('price') is-invalid @enderror"
              value="{{old('price')}}"
              placeholder="Precio del producto">
              @error('price')
    					<span class="invalid-feedback" role="alert">
    						<strong>{{ $message }}</strong>
    					</span>
    					@enderror
            </label>
            <label class="campo-formulario d-block" for="ref">
              <input
              type="text"
              name="ref"
              class="form-control @error('ref') is-invalid @enderror"
              value="{{old('ref')}}"
              placeholder="Codigo de referencia del producto">
              @error('ref')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </label>
            <label class="campo-formulario" for="image">
              <input
              type="file"
              name="image"
              class="form-control @error('image') is-invalid @enderror"
              value="{{old('image')}}"
              >
              @error('image')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </label>
            <label class="campo-formulario d-block" for="category">
              <input
              type="text"
              name="category"
              class="form-control @error('category') is-invalid @enderror"
              value="{{old('category')}}"
              placeholder="Categoria del producto">
              @error('category')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </label>
            <div >
            	<button class="boton"type="submit" name="button">Crear Producto</button>
            </div>

          </form>
        </div>
      </div>
    </div>
    @else
    <div class="">
      <div class="card bg-transparent">
        <div class="p-4">
          <h4>Bienvenido a DIY - Packaging</h4>
          <a href="/wishlist">Quiero ver mi  wishlist</a>
        </div>
      </div>
    </div>

    @endif

  </div>
</div>
@endsection
