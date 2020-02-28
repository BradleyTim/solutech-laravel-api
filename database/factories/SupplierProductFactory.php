<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SupplierProduct;
use Faker\Generator as Faker;

$factory->define(SupplierProduct::class, function (Faker $faker) {
    return [
        'supply_id' => factory(\App\Supplier::class),
        'product_id' => factory(\App\Product::class),
    ];
});
