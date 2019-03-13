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

Auth::routes();
Route::post('/layouts/adsCategory', 'ArticleController@store');
Route::post('/projects', 'CategoryController@store');

// Route::get('/index', 'PageController@index');
Route::get('/layouts/adsCategory', 'ArticleController@create');
Route::get('/projects/create', 'CategoryController@create');
Route::get('/projects/index', 'HomeController@index');
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
Route::get('admin_area', ['middleware' => 'admin', function () {
    //
}]);
Route::get('auth/logout', 'Auth\LoginController@logout');
// Route::get('/projects/index', 'PageController@index');

// Route::post('/projects', 'ImageController@store');


Route::get('category/{id}','HomeController@byCategory');

Route::get('/layouts/show/{id?}',
 ['uses'=>'ArticleController@show','as'=>'layouts.show']);
Route::middleware(['auth'])->group(function() {
	Route::resource('admin/article', 'admin\ArticleController');
	Route::resource('/projects', 'ArticleController');
	Route::get('/dashboard', 'DashboardController@index');
});
