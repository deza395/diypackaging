@extends('front.template')

@section('pageTitle')
  Mi perfil - {{Auth::user()->nombre}}
@endsection

@section ('mainContent')


        <div>
        <h2>Bienvenid@!</h2>

  			<h3>Hola  {{Auth::user()->nombre}} </h3>
        <h3>Tu email es  {{Auth::user()->email}} </h3>
        <h3>Tu usuario es  {{Auth::user()->username}} </h3>
        </div>

@endsection
