<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Producto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $users = factory(App\User::class,25)->create();
      $products =  factory(App\Producto::class, 20)->create();
    }
}
