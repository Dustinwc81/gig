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

Route::get('/', 'PageController@index')->name('pages.welcome');
Route::get('/contact', 'PageController@contact')->name('pages.contact');
Route::get('/myStory', 'PageController@myStory')->name('pages.myStory');

Route::get('/gigs', 'PageController@gigs')->name('pages.gigs');
Route::get('/apparel', 'PageController@apparel')->name('pages.apparel');
Route::get('/forgeYourOwn', 'PageController@forgeYourOwn')->name('pages.forgeYourOwn');



Auth::routes();
