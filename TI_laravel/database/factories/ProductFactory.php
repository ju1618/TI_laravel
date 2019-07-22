<?php

use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	// Ruta en donde queremos subir las imágenes
	$filePath = storage_path('app/public/products');
	return [
    'name' => $faker->sentence(5, true),
    'price' => $faker->randomFloat(2, 100, 999999),
		'image' => $faker->imageUrl($width = 640, $height = 480,'cats'),
		// 'image' => $faker->image($filePath(), 400, 300, null, false),
    'category' => $faker->randomElement($array = array ('Cocina','Oficina','Hogar')),
		'user_id'=> $faker->randomDigitNotNull
  ];
});
