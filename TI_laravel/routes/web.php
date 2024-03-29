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
//Para buscar los productos por el slug
Route::bind('product', function($slug){
   return App\Product::where('slug', $slug)->first();
});

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('profile', 'UserController@profile');
// // //Modificaciones del perfil de usuario
Route::post('profile', 'UserController@update_avatar');

// //Ruta de perfil de usuario
// Route::get('/perfil', 'PerfilController@index')->middleware('auth');





//Metodo de pago: Paypal

//Enviamos el pedido a Paypal
Route::get('payment', array('as' => 'payment', 'uses' => 'PaypalController@postPayment',));

//Después de realizar el pago Paypal redirecciona a esta Ruta
Route::get('payment/status', array('as' => 'payment.status', 'uses' => 'PaypalController@getPaymentStatus',));

//---Carrito---
Route::get('cart/show', ['as'=>'cart-show', 'uses' => 'CartController@show']);
Route::get('cart/add/{product}', ['as'=> 'cart-add', 'uses' => 'CartController@add']);
Route::get('cart/delete/{product}', ['as'=> 'cart-delete', 'uses' => 'CartController@delete']);
Route::get('cart/trash', ['as'=> 'cart-trash', 'uses' => 'CartController@trash']);
Route::get('cart/update/{product}', ['as'=> 'cart-update', 'uses' => 'CartController@update']);
Route::get('order-detail', ['middleware'=>'auth:user', 'as'=>'order-detail', 'uses'=>'CartController@orderDetail']);


// Rutas de Products
Route::get('/',  'ProductsController@index');
// Route::get('/','SearchController@index');
Route::get('/products/addProduct', 'ProductsController@create');
Route::post('/products/addProduct', 'ProductsController@store');
Route::get('/listado',  'ProductsController@listar');

Route::get('faq', 'FaqController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('/');
});
