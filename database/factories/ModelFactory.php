<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Product;
use App\Models\Shop;

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

$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = Hash::make('secret'),
        'remember_token' => Str::random(10)
    ];
});

$factory->define(Product::class, function (Faker $faker) {

    return [
        'name'        => $faker->unique()->word,
        'price'       => '12,99 €',
        'description' => $faker->unique()->text,
        'ref'         => Str::random(4)
    ];

});

$factory->define(Product::class, function (Faker $faker) {

    return [
        'name'        => $faker->unique()->word,
        'price'       => '12,89 €',
        'description' => $faker->unique()->text,
        'ref'         => Str::random(4),
        'shop_id'     => 1,

    ];

});

$factory->define(Shop::class, function (Faker $faker) {

    return [
        'name'        => $faker->unique()->word,
        'description' => $faker->unique()->text,
        'logo'        => $faker->unique()->url,
        'url'         => $faker->unique()->url
    ];

});
