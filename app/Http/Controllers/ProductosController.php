<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

use App\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getById($id)
    {
        $producto = Producto::find($id);
        return view ('front.producto',compact('producto'));
    }

    public function getAll()
    {
      $productos = Producto::all();
      return view ('front.productos',compact('productos'));
    }

    public function getByCategory($categoria)
    {
        $productos = Producto::where('categoria',$categoria)->get();
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
    public function edit(Request $request, $id)
    {
        //
        $producto = Producto::findOrFail($id);
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
        $producto = Producto::findOrFail($id);

        $producto->nombre = $request['nombre'];
        $producto->ref = $request['ref'];
        $producto->precio = $request['precio'];
        $producto->categoria = $request['categoria'];

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
      $producto = Producto::findOrFail($id);
      $producto->delete();

      $productos = Producto::all();
      return redirect ('/productos');
    }
}
