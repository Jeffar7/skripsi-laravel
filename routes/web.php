<?php

use App\Brand;
use App\Category;
use App\Gender;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\WomenController;
use App\product_user;
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

Route::get('/load', function () {
    return view('loading');
});

Route::get('/about', function () {
    return view('pages/aboutus');
});

Route::get('/contact', function () {
    return view('pages/contactus');
});

Route::get('/faq', function () {
    return view('pages/faq');
});

Route::get('/termsandcondition', function () {
    return view('pages/terms');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pagehome', 'PageController@home'); //testadmin
Route::get('/userprofile', 'UserController@index'); //testuser
Route::get('/usersettings', 'UserController@usersettings');
Route::get('/users/create', 'UserController@create')->middleware('role:admin');
Route::post('/users/create', 'UserController@store')->middleware('role:admin');
Route::get('/users/{user}/edit', 'UserController@edit')->middleware('role:admin');
Route::get('/usercontrol', 'UserController@usercontrol')->middleware('role:admin');
Route::get('/homeman', 'PageController@homeman')->name('homeman');
Route::patch('/users/adm/{user}', 'UserController@updateadm')->middleware('role:admin');
Route::patch('/users/cstm/{user}', 'UserController@update')->middleware('role:admin|customer');
Route::delete('users/{user}', 'UserController@destroy')->middleware('role:admin');

Route::get('/itemlist', 'PageController@itemlist');
Route::get('/itemdetail', 'PageController@itemdetail');
Route::get('/itemdetail', 'PageController@itemdetail');

Route::get('/managebrand', 'BrandController@index')->middleware('role:admin');
Route::get('/brands/create', 'BrandController@create')->middleware('role:admin');
Route::post('/managebrand', 'BrandController@store')->middleware('role:admin');
Route::get('/brands/{brand}', 'BrandController@show')->middleware('role:admin|customer');
Route::get('/allbrand', 'BrandController@allbrand')->name('brand')->middleware('role:admin|customer');
Route::delete('/brands/{brand}', 'BrandController@destroy')->middleware('role:admin');
Route::get('/brands/{brand}/edit', 'BrandController@edit')->middleware('role:admin');
Route::patch('/brands/{brand}', 'BrandController@update')->middleware('role:admin');


Route::get('/manageproduct', 'ProductController@index')->middleware('role:admin');
Route::get('/products/create', 'ProductController@create')->middleware('role:admin');
Route::post('/manageproduct', 'ProductController@store')->middleware('role:admin');
Route::get('/products/{product}/edit', 'ProductController@edit')->middleware('role:admin');
Route::patch('/products/{product}', 'ProductController@update')->middleware('role:admin');
Route::delete('/products/{product}', 'ProductController@destroy')->middleware('role:admin');

Route::get('/product-wish', 'ProductController@productwish')->middleware('role:customer|admin');

Route::get('/men-tops', 'ManController@tops');
Route::get('/men-tops/detail/{product}', 'ManController@topsdetail');
Route::get('/men-bottoms', 'ManController@bottoms');
Route::get('/men-shoes', 'ManController@shoes');
Route::get('/men-accessories', 'ManController@accessories');
Route::get('/men-new', 'ManController@new');
Route::get('/men-sale', 'ManController@sale');
Route::get('/men', 'ManController@men');


Route::get('/women-tops', 'WomenController@tops');
Route::get('/women-bottoms', 'WomenController@bottoms');
Route::get('/women-shoes', 'WomenController@shoes');
Route::get('/women-accessories', 'WomenController@accessories');
Route::get('/women-new', 'WomenController@new');
Route::get('/women-sale', 'WomenController@sale');

Route::get('/check', function () {
    // mencari product dengan product gender 'MEN' category 'SHOES' dan produk dengan category 'SHOES'
    // $genders = Gender::find(1)->category()->where('name', 'SHOES')->first();
    // dd($genders->product);

    //mencari product dengan gender 'MEN' dan Category ALL
    // $genders = Gender::find(1)->category()->get();
    // dd();

    // foreach ($categories as $category) {
    //     foreach ($category->product as $product) {
    //         dd($product->productname);
    //     }
    // }
});
