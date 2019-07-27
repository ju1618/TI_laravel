<?php
/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
    	'name' => $faker->randomElement($array = [
				'Tecnología',
			  'Bebidas',
			  'Autos',
			  'Coding Scholl',
			  'Indumentaria',
				'Alimentos',
				'Ropa deportiva',
				'Hogar',
				'Jardín',
			])
    ];
});
