<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Product;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getById($id)
    {
        $producto = Product::find($id);
        return view ('front.producto',compact('producto'));
    }

    public function getAll()
    {
      $productos = Product::all();
      return view ('front.productos',compact('productos'));
    }

    public function getByCategory($category)
    {
        $productos = Product::where('category',$category)->get();
        return view ('front.productos',compact('productos'));
    }

   public function getByCategorySubCategoria($category,$subcategoria)
   {
       $productos = Product::where('category',$category)->where('subcategory',$subcategoria)->get();
       return view ('front.productos',compact('productos'));
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
    public function edit(Request $request, $id)
    {
        //
        $producto = Product::findOrFail($id);
        return view ('front.edit-producto',compact('producto'));
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
        $producto = Product::findOrFail($id);

        $producto->name = $request['name'];
        $producto->ref = $request['ref'];
        $producto->price = $request['price'];
        $producto->category = $request['category'];
        $producto->subcategory = $request['subcategory'];

        $producto->save();
        return redirect('/producto/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $producto = Product::findOrFail($id);
      $producto->delete();

      $productos = Product::all();
      return redirect ('/productos');
    }
}
