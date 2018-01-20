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
Route::resource('forgeYourOwn', 'ForgeYourOwnController');

// Forum routes
Route::get('forum', 'ThreadController@index')->name('forum.index');
Route::get('forum/create', 'ThreadController@create')->name('forum.create');
Route::get('forum/{thread}', 'ThreadController@show')->name('forum.show');
Route::post('/forum', 'ThreadController@store')->name('threads.store');
Route::post('forum/{thread}/replies', 'ReplyController@store');
<<<<<<< Updated upstream
<<<<<<< Updated upstream

//Gigging tournament routes
Route::resource('tournament', 'TournamentController');

//Youth tournament routes
Route::resource('youthTournament', 'YouthTournamentController');

//Facts and Stats routes
Route::resource('facts', 'FactsController');

//apparel routes
Route::resource('apparel', 'ApparelController');
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

//shopping cart routes
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{products}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{products}', 'CartController@update')->name('cart.update');

//checkout page routes
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

//thank you page.....After completion of a purchase
Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');

Auth::routes();
