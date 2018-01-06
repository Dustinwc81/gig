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

// Forward Facing Pages/routes

Route::get('/', 'PageController@getWelcome')->name('pages.welcome');
Route::get('/contact', 'PageController@getContact')->name('pages.contact');
Route::get('/myStory', 'PageController@getMyStory')->name('pages.myStory');

Route::resource('gigs', 'GigController');
Route::resource('apparel', 'ApparelController');
Route::resource('forgeYourOwn', 'ForgeYourOwnController');
Route::get('/checkOut', 'PageController@checkOut')->name('pages.checkOut');



Auth::routes();
