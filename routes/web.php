<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/search-product', 'HomeController@category')->name('search-product');
    Route::get('/get-product/{category}', 'HomeController@search_product')->name('get-product');
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['AdminGuestLogin']], function () {
        Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin-login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin-login-submit');
    });
    Route::group(['middleware' => ['AdminAuth'], 'namespace' => 'admin'], function () {

        Route::get('/dashboard', 'SiteController@index')->name('admin-dashboard');

        Route::get('/user/login/{user}', 'UserController@user_login')->name('user.admin.user_login');
        Route::resource('user', 'UserController');
        
        Route::get('/category/add-product/{category}', 'CategoryController@add_product')->name('category.add-product');
        Route::resource('category', 'CategoryController');

        Route::resource('product', 'ProductController');
    });
});
