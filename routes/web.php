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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/carrito', 'ShoppingCartsController@index');


Auth::routes();

Route::get('/home', 'InicialController@index');

Route::resource('products','ProductsController');

Route::resource('in_shopping_carts','InShoppingCartsController',[
	'only' => ['store','destroy']
]);