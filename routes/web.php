<?php

use Gloudemans\Shoppingcart\Facades\Cart;

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

// Forward Facing Pages/routes

App::register('Gloudemans\Shoppingcart\ShoppingcartServiceProvider');
Route::view('/', 'pages.welcome')->name('welcome');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/myStory', 'pages.myStory')->name('myStory');

Route::resource('gigs', 'GigController');
Route::resource('apparel', 'ApparelController');
Route::resource('forgeYourOwn', 'ForgeYourOwnController');
Route::get('/checkOut', 'PageController@checkOut')->name('Checkout-page');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');

Route::get('empty', function () {
    Cart::destroy();
});


//Auth::routes();
