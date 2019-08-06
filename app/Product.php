<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wishlist;

class Product extends Model
{
  // protected $table = "products";
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
        'image', 'name', 'price','ref', 'category',
  ];

  public function wishlist(){
     return $this->hasMany(Wishlist::class);
  }
}
