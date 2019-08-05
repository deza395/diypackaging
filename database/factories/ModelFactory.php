
<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Producto;
use App\Wishlist;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(App\User::class, function (Faker $faker) {
    static $password;
    return [
        'nombre' => $faker->name,
        'username' => $faker->userName,
        'password' => $password ?: $password = Hash::make('DH123456'),
        'pais' => $faker->country,
        'avatar' => $faker->randomElement($array = array ('foto1.png','foto2.png')),
        'email' => $faker->unique()->freeEmail,
        'created_at' => $faker->dateTimeThisMonth($max = 'now'),
        'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
        'isAdmin' => $faker->randomElement($array = array (1,0)),
    ];
});

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->domainWord,
        'precio' => $faker->numberBetween($min = 150, $max = 300),
        'ref' => $faker->swiftBicNumber,
        'imagen' => $faker->randomElement($array = array ('bolsa_barbara.jpeg','bolsa_espuma.jpeg','bolsa_pasioneria.jpeg','caja_ajuar.jpg','caja_crocante.jpeg','caja_fragil.jpeg')),
        'categoria' => $faker->randomElement($array = array ('Bolsa','Caja')),
        'created_at' => $faker->dateTimeThisMonth($max = 'now'),
        'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
    ];
});

$factory->define(App\Wishlist::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'product_id' => $faker->numberBetween($min = 1, $max = 10),
        'created_at' => $faker->dateTimeThisMonth($max = 'now'),
        'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
    ];
});
