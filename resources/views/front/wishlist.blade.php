@extends('front.template')

	@section('pageTitle', 'login')

	@section ('mainContent')
  @if (Auth::user())
    @foreach ($wishlists as $wishlist)
      <p>{{$wishlist->product->nombre}}</p>
      <a href="#" class="btn btn-newsletter"
      onclick="event.preventDefault();
                    document.getElementById('wishlist_remove_form').submit();">Quitar de la wishlist</a>

      <form action="{{route('wishlist.destroy', $wishlist->id)}}" id="wishlist_remove_form" method="POST">
       @csrf
       <input type="hidden" name="_method" value="delete" />
       <input name="whishlist_id" type="text" value="{{$wishlist->id}}" hidden />
     </form>
    @endforeach
  @endif


	@endsection
