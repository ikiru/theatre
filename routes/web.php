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



/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', 'SiteController@index');
Route::get('/contact',function(){return view('contact');});
Route::get('/product',function(){return view('products');});
Route::get('/support',function(){return view('support');});
Route::get('/news',function(){return view('news');});
Route::get('/about',function(){return view('about');});

Route::get('/welcome',function(){return view('welcome');});
// Route::get('{slug}','PageController@show');

/*
|--------------------------------------------------------------------------
| System Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/*
|--------------------------------------------------------------------------
|Backend Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/profile',function(){return view('/portal/profile');});
