<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Rutas de Products
Route::get('/',  'ProductsController@index');
Route::get('/products/addProduct', 'ProductsController@create');
Route::post('/products/addProduct', 'ProductsController@store');
Route::get('/buscar',  'ProductsController@buscar');
Route::get('/listado',  'ProductsController@listado');

Route::get('/faq', 'FaqController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
