<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userprofile','UserController@index');
Route::get('/users/create','UserController@create');
Route::post('/users/create','UserController@store');
Route::get('/users/{user}/edit','UserController@edit');
Route::patch('/users/{user}', 'UserController@update');
Route::get('/pagehome', 'PageController@home');
Route::get('/usercontrol', 'UserController@usercontrol');
Route::get('/homeman', 'PageController@homeman')->name('homeman');

Route::get('/itemlist', 'PageController@itemlist');
Route::get('/itemdetail', 'PageController@itemdetail');
Route::get('/itemdetail', 'PageController@itemdetail');

Route::get('/managebrand', 'BrandController@index');
Route::get('/brands/create', 'BrandController@create');
Route::post('/managebrand', 'BrandController@store');
Route::get('/brands/{brand}', 'BrandController@show');
Route::get('/allbrand', 'BrandController@allbrand')->name('brand');
Route::delete('/brands/{brand}', 'BrandController@destroy');
Route::get('/brands/{brand}/edit', 'BrandController@edit');
Route::patch('/brands/{brand}', 'BrandController@update');

Route::get('/manageproduct', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/manageproduct', 'ProductController@store');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::patch('/products/{product}', 'ProductController@update');

Route::get('/men-tops','ManController@tops');
Route::get('/men-bottoms','ManController@bottoms');
Route::get('/men-shoes','ManController@shoes');
Route::get('/men-accessories','ManController@accessories');
Route::get('/men-new','ManController@new');
Route::get('/men-sale','ManController@sale');

Route::get('/women-tops','WomenController@tops');
Route::get('/women-bottoms','WomenController@bottoms');
Route::get('/women-shoes','WomenController@shoes');
Route::get('/women-accessories','WomenController@accessories');
Route::get('/women-new','WomenController@new');
Route::get('/women-sale','WomenController@sale');