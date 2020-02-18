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
Route::get('/', function () {
    return view('landing');
});
*/

Route::get('/', 'LandingController@index')->name('landing');
Route::get('/displayVideo/{id}', 'LandingController@displayChosenVideo')->name('displayVideo');







// Authentication Routes...
//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/showMyVideos', 'VideoController@showMyVideos')->name('showMyVideos');
Route::get('/addVideo', 'VideoController@showAddVideoForm')->name('addVideoForm');
Route::post('/saveVideo', 'VideoController@saveVideo')->name('saveVideo');
Route::get('/editVideo/{id}', 'VideoController@editVideoForm')->name('editVideo');
Route::post('/updateVideo/{id}', 'VideoController@updateVideo')->name('updateVideo');
Route::post('/deleteVideo', 'VideoController@deleteVideo')->name('deleteVideo');

Route::get('/showMyGenres', 'GenreController@showGenres')->name('showMyGenres');




/*
//admin sections
Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout',  'Auth\AdminLoginController@logout')->name('admin.logout');
//  Password reset Route
  Route::post('password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
*/
