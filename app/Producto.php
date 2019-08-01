<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wishlist;

class Producto extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
        'imagen', 'nombre', 'precio','ref'
  ];

  public function wishlist(){
     return $this->hasMany(Wishlist::class);
  }
}
