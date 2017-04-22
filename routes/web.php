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


/*
|--------------------------------------------------------------------------
|Portal Routes -> Backend of the site
|--------------------------------------------------------------------------
|
*/

Route::get('/portal',function(){return view('/portal/home');});

Route::get('/profile','UserController@profile');
Route::post('/profile','UserController@update_avatar');

// Route::get('/donor',function(){return view('/portal/booster/donor');});

Route::resource('/donor','DonorController');
Route::resource('/donation','DonationController');
Route::resource('/points','PointsController');
Route::resource('/show','ShowController');
Route::resource('/venu','VenueController');
/*
|--------------------------------------------------------------------------
|Ajax
|--------------------------------------------------------------------------
|
*/

// Route::get('/donor','AjaxController@fetch_donor');
// Route::post('/donor','AjaxController@fetch_donor');
// Route::get('/', function(){
//   $states =State::all();
//   return View::make('portal.booster.donor')->with('states', $states);
// });
