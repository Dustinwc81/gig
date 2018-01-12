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


Route::view('/', 'pages.welcome')->name('welcome');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/myStory', 'pages.myStory')->name('myStory');

Route::resource('gigs', 'GigController');
Route::resource('apparel', 'ApparelController');
Route::resource('forgeYourOwn', 'ForgeYourOwnController');

// Forum routes
Route::get('forum', 'ThreadController@index')->name('forum.index');
Route::get('forum/{thread}', 'ThreadController@show')->name('forum.show');
Route::post('/forum', 'ThreadController@store');
Route::post('forum/{thread}/replies', 'ReplyController@store');

//shopping cart routes
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{products}', 'CartController@destroy')->name('cart.destroy');

//checkout page routes
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');

Auth::routes();
