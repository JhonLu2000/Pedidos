<?php

use Faker\Generator as Faker;
use App\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
       // 'image' => $faker->imageUrl(250, 250),

        'image' => "https://picsum.photos/250/250/?image=".$faker->numberBetween(0, 500),
        'product_id' => $faker->numberBetween(1, 10)
    ];
});
