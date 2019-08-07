<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Wishlist;

class WishlistController extends Controller
{

  public function __construct() {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();
      $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);

          return view('front.wishlist', compact('wishlists'));

    }

    public function store(Request $request)
    {
      $this->validate($request, array(
       'user_id'=>'required',
       'product_id' =>'required',
      ));

      $status=Wishlist::where('user_id',Auth::user()->id)
      ->where('product_id',$request->product_id)
      ->first();

      if(isset($status->user_id) and isset($request->product_id))
         {
             return redirect()->back()->with('flash_messaged', 'El item ya fue agregado anteriormente');
         }
         else
         {
             $wishlist = new Wishlist;

             $wishlist->user_id = $request->user_id;
             $wishlist->product_id = $request->product_id;
             $wishlist->save();

             return redirect()->back()->with('flash_message',
                           'Item, '. $wishlist->product->title.' agregado a la wishlist.');
         }

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
       /** $wishlist busca una wishlist por $id
       *   BORRA la wishlist que encontro con ese id
       */
       $wishlist = Wishlist::find($id);
       $wishlist->delete();
       /** Guardo en $user rl usuario logeado que me da la clase Auth
       *   Busco las wishlists del usuario logeado actualizada despues de Borrar
       *   Lo mando de nuevo a la vista de wishlists ahora sin el producto que borro
        */
       $user = Auth::user();
       $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
       return view('front.wishlist', compact('wishlists'));
     }
}
