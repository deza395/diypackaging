@extends('front.template')

	@section('pageTitle', 'login')

	@section ('mainContent')
  @if (Auth::user())

<div class="sellers sellers-prod">
	<div class="row mx-0">
 	 <div class="card-deck">
		 	@if (sizeof($wishlists) > 0)
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
					 <a href="#" class="btn btn-newsletter mt-4"
					 onclick="event.preventDefault();
					 document.getElementById('wishlist_remove_form_{{$wishlist->id}}').submit();">Quitar de la wishlist</a>

					 <form action="{{route('wishlist.destroy', $wishlist->id)}}" id="wishlist_remove_form_{{$wishlist->id}}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="delete" />
						<input name="whishlist_id" type="text" value="{{$wishlist->id}}" hidden />
					</form>
 				 </div>
 				 @endforeach
				 @else
				 <div class="">
		       <div class="card bg-transparent">
		         <div class="p-4">
		           <h4>No has agregado productos a tu wishlist.</h4>
		           <a href="/productos"> Ver productos para mi wishlist.</a>
		         </div>
		       </div>
		     </div>

				 @endif

 	 </div>
  </div>


</div>

  @endif


	@endsection
