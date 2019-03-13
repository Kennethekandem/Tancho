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

/* HOME ROUTE */
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

/*  ADMIN ROUTES */

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');
});

/*  AUTHOR ROUTES  */

Route::prefix('author')->group(function() {
    Route::get('/login', 'Auth\AuthorLoginController@showLoginForm')->name('author.login');
    Route::post('/login', 'Auth\AuthorLoginController@login')->name('author.login.submit');
    Route::get('/', 'AuthorController@index')->name('author');
    Route::get('/logout', 'Auth\AuthorLoginController@authorLogout')->name('author.logout');
});

/*  RESOURCE ROUTES  */

Route::resource('blog', 'BlogController');
//Route::delete('blog_destroy', 'BlogController@destroy');