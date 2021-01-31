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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userprofile','UserController@index');
Route::get('/users/create','UserController@create');
Route::get('/pagehome', 'PageController@home');
Route::get('/usercontrol', 'UserController@usercontrol');
Route::get('/homeman', 'PageController@homeman')->name('homeman');

Route::get('/itemlist', 'PageController@itemlist');
Route::get('/itemdetail', 'PageController@itemdetail');
Route::get('/itemdetail', 'PageController@itemdetail');

Route::get('/managebrand', 'BrandController@index');
Route::get('/brands/create', 'BrandController@create');
Route::post('/managebrand', 'BrandController@store');
Route::get('/allbrand', 'BrandController@allbrand')->name('brand');

Route::get('/manageproduct', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/manageproduct', 'ProductController@store');