@extends('front.template')

	@section('pageTitle', 'login')

	@section ('mainContent')
  @if (Auth::user())

<div class="sellers sellers-prod">
	<div class="row mx-0">
 	 <div class="card-deck">
 		   @foreach ($wishlists as $wishlist)
 				 <div class="card" data-card-product= "{{$wishlist->product->name}}">
 					 <img  src="/img/productos/{{$wishlist->product->image}}" width="100%"  height="250px">
 					 <div style= "background-color: #efe4d5; align-content: center;" class="card-body">
 								 <h5 style= "color: #bfb29f; text-align: center;" class="card-title">{{$wishlist->product->name}}</h5>
 								 <p class="card-text"><small class="text-muted"><b>Código:</b>{{$wishlist->product->ref}}</small></p>
 								 <p class="card-text"><small class="text-muted"><b>Categoría:</b> {{$wishlist->product->category}} </small></p>
 					 </div>
 					 <a href="/producto/{{$wishlist->product->id}}" class="btn btn-newsletter">
 						Ver Producto
 					 </a>
 				 </div>
 				 @endforeach
 	 </div>
  </div>

      <a href="#" class="btn btn-newsletter"
      onclick="event.preventDefault();
                    document.getElementById('wishlist_remove_form').submit();">Quitar de la wishlist</a>

      <form action="{{route('wishlist.destroy', $wishlist->id)}}" id="wishlist_remove_form" method="POST">
       @csrf
       <input type="hidden" name="_method" value="delete" />
       <input name="whishlist_id" type="text" value="{{$wishlist->id}}" hidden />
     </form>
</div>

  @endif


	@endsection
