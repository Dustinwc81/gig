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
Route::view('/myStory', 'pages.myStory')->name('myStory');

// Contact form routes
Route::view('/contact', 'pages.contact')->name('contact');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');

// Gig & Product routes
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::get('/gigs', 'ShopController@index')->name('gig.index');

// Custom Gig product routes.
Route::resource('forgeYourOwn', 'ForgeYourOwnController');

//Gigging tournament routes
Route::resource('tournament', 'TournamentController');

//Youth tournament routes
Route::resource('youthTournament', 'YouthTournamentController');

//Facts and Stats routes
Route::resource('facts', 'FactsController');

//About Gigging Tournament Routes
Route::resource('giggingTournament', 'GiggingTournamentController');

//shopping cart routes
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{products}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{products}', 'CartController@update')->name('cart.update');

//checkout page routes
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

//thank you page.....After completion of a purchase
Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');

   Auth::routes();


   Route::group(['prefix' => 'admin'], function () {
       Voyager::routes();
   });
