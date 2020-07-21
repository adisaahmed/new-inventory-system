<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User'),
        'brand_id' => factory('App\Brand'),
        'types_id' => factory('App\Type'),
        'name' => $faker->name,
        'description' => $faker->sentence,
        'balance' => $faker->randomDigit,
        'itemStoreLocation' => $faker->city,
        'purchasedPrice' => $faker->randomDigit,
        'priceItWillBeSold' => $faker->randomDigit
    ];
});
