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
| Voyager Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/*
|--------------------------------------------------------------------------
|Portal Routes -> Backend of the site
|--------------------------------------------------------------------------
|
*/
Route::get('/profile','UserController@profile');
Route::post('/profile','UserController@update_avatar');
Route::resource('/portal','PortalController');
Route::resource('/donor','DonorController');
Route::resource('/donation','DonationController');
Route::resource('/points','PointsController');
Route::resource('/show','ShowController');
Route::resource('/venue','VenueController');
Route::resource('/role','RolelistController');
Route::resource('/cast','CastlistController');
Route::resource('/auditionf','AuditionController');
Route::resource('/dnote','DirectorNoteController');
Route::resource('/conflicts','ConflictController');

/*
|--------------------------------------------------------------------------
|Graphiql
|--------------------------------------------------------------------------
|
*/

Route::get('/graphiql',function(){return view('vendor.graphiql.index');});
