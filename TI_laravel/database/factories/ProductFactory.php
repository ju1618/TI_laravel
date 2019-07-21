<?php

use App\Product;
use Faker\Generator as Faker;
$factory->define(Product::class, function (Faker $faker) {
	// Ruta en donde queremos subir las imágenes
	$filePath = storage_path('app/public/products');
	return [
    'name' => $faker->sentence(5, true),
    'price' => $faker->randomFloat(2, 100, 999999),
		'image' => $faker->image($filePath, 400, 300, null, false)
  ];
});
