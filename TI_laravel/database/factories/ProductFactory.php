<?php

use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

	// Ruta en donde queremos subir las imágenes
	$filePath = storage_path('app/public/product_imgs');

	return [
    'title' => $faker->sentence(3, true),
		'product-image' => $faker->image($filePath, 400, 300, null, false),
    // 'category' => $faker->randomElement($array = array ('Cocina','Oficina','Hogar')),
		'price' => $faker->randomFloat(2, 100, 999999),
		'description'=> $faker->sentence(10, true),
		'user_id'=> $faker->randomDigitNotNull
  ];
});
