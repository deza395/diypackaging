<?php

namespace App\Http\Controllers;
use Auth;
use App\Product;
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

      $productImage = $request->file('image');
      $productImageName = uniqid('img-') . '.' . $productImage->extension();
      $productImage->storePubliclyAs("public/productos", $productImageName);

    //  $productImage = 'testUrlTrucha.jpg';

      $producto = new Product();
      $producto->name = $request['name'];
      $producto->price = $request['price'];
      $producto->ref = $request['ref'];
      $producto->image = $productImageName;
      $producto->category = $request['category'];
      $producto->save();
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
