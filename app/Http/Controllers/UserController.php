<?php

namespace App\Http\Controllers;
use Auth;
use App\Producto;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showProfile()
    {
      if (Auth::guest()){
        return view ('auth.login');
      } else {
      return view ('userviews.userprofile');
    }
      return view ('front.perfil');
    }

    /**
    * Adds a product to the DB
    */

    public function addProduct(Request $request){

      // $productImage = $request->file('imagen');
      // $productImageName = uniqid('img-') . '.' . $productImage->extension();
      // $productImage->storePubliclyAs("public/img/productos", $productImageName);

      $productImage = 'testUrlTrucha.jpg';

      return Producto::create([
          'nombre' => $request['nombre'],
          'precio' => $request['precio'],
          'ref' => $request['ref'],
          'imagen'=> $productImage,
          'categoria' => $request['categoria'],
      ]);

      return redirect('/perfil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
