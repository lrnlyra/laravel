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

/* ROUTES EXAMPLES */

// Example with var
/*Route::get('{n}', function($n) {
	return 'Route testing, var = '.$n;
})->where('n', '[1-3]');*/
// Example of response with header
/*Route::get('header', function () {
	return response('Response with header', 206)->header('Content-Type', 'text/plain');
});*/
// Old home route
/*Route::get('/', function () {
	return view('home');
})->name('home');*/

// Home (with controller)
Route::get('/', 'HomeController@index')->name('home');
// Articles
Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-2]+');
