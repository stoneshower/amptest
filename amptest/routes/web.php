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

// Route::get('/amp/', 'AmpController@index');
// Route::get('/amp/show', 'AmpController@show');
// Route::get('/amp/favorite-with-count', 'AmpController@getFavoriteData');
// Route::post('/amp/favorite-with-count', 'AmpController@storeFavoriteData');
// Route::patch('/amp/favorite-with-count', 'AmpController@updateFavoriteData');
// Route::get('/amp_data/', 'AmpController@getdata');
// Route::get('/amp_orm/', 'CryptoController@index');

Route::get('/', 'PageController@index');
Route::get('/amp', 'PageController@index');
Route::get('/amp/favorite-with-count', 'AmpController@getFavoriteData');
Route::get('/amp_data/', 'AmpController@getdata');
Route::get('/amp_orm/', 'CryptoController@index');
// Route::get('/amp/favorite-with-count', 'PageController@index');