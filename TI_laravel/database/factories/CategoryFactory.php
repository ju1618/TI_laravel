<?php
/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
    	'name' => $faker->randomElement($array = [
				'Tecnología',
			  'Bebidas',
			  'Autos',
			  'Indumentaria',
				'Alimentos',
				'Ropa deportiva',
				'Hogar',
				'Jardín',
			])
    ];
});
