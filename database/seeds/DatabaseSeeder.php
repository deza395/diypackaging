<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $users = factory(App\User::class,10)->create();
      $products =  factory(App\Product::class, 20)->create();
      $whishlists =  factory(App\Wishlist::class, 30)->create();
    }
}
