<?php

use App\Brand;
use App\Cart;
use App\Category;
use App\Gender;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WomenController;
use App\Order;
use App\Product;
use App\product_user;
use App\Review;
use App\User;
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

Route::get('/', 'ManController@bestseller');

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
Route::get('/pagehome', 'PageController@home')->middleware('auth');
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

Route::get('/managebrand', 'BrandController@index')->middleware('role:admin', 'auth');
Route::get('/brands/create', 'BrandController@create')->middleware('role:admin');
Route::post('/managebrand', 'BrandController@store')->middleware('role:admin');
// Route::get('/brands/{brand}', 'BrandController@show')->middleware('role:admin|customer');
Route::get('/brands/{brand}', 'BrandController@show');
// Route::get('/allbrand', 'BrandController@allbrand')->name('brand')->middleware('role:admin|customer');
Route::get('/allbrand', 'BrandController@allbrand')->name('brand');
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
Route::post('/wish-list/save', 'ProductController@productwishsave');
Route::delete('/wish-list/delete/{id}', 'ProductController@destroywish');
Route::delete('/wish-list/addtocart/{id}', 'ProductController@addtocart');

//new cart
Route::post('/addtocart/{id}', 'ProductController@addtocartt');
//add to cart via detail product
Route::get('/product-cart/{id}', 'ProductController@addtocartviadetail');

Route::get('/product-cart', 'ProductController@productcart');
Route::get('/product-cart/delete/{id}', 'ProductController@destroylist');

//checkout
Route::post('/checkout', 'OrderController@checkout');

//buynow
Route::get('/buy-now/{id}', 'BuynowController@buynow');
Route::post('order-summary-buy-now', 'BuynowController@summary');
Route::post('/payment/buy_now', 'BuynowController@payment');
Route::post('/makepayment/buy_now', 'BuynowController@makepayment');
Route::post('/delivery/addaddress/buy_now', 'BuynowController@addaddress');

//delivery
Route::get('/checkout/delivery', 'OrderController@delivery');
Route::get('/delivery/address/{id}', 'OrderController@chooseaddress');
Route::post('/delivery/addaddress', 'OrderController@addaddress');
Route::post('/payment', 'OrderController@payment');
Route::post('/order-summary', 'OrderController@summary');
Route::post('/makepayment', 'OrderController@makepayment');


//get history payment
Route::get('/payment-history', 'StatusController@payment_history');

//waiting for review
Route::get('/waiting-for-review', 'StatusController@waiting_for_review');

//make review
Route::get('/products/review/{id}', 'StatusController@product_review_detail');
Route::post('/submit/review', 'StatusController@product_submit_review');

Route::get('/raffle', 'RaffleController@raffle');
Route::get('/raffle/detail/{raffle}', 'RaffleController@raffledetail');
Route::get('/manageraffle', 'RaffleController@index');
Route::get('/raffles/create', 'RaffleController@create');
Route::post('/manageraffle', 'RaffleController@store');
Route::get('/raffles/{raffle}/edit', 'RaffleController@edit');
Route::patch('/raffles/{raffle}', 'RaffleController@update');
Route::delete('/raffles/{raffle}', 'RaffleController@destroy');

//place raffle
Route::post('/raffle/submit', 'RaffleController@submit');
Route::get('/raffle/history', 'RaffleController@history');

Route::get('/event', 'EventController@event');
Route::get('/events/detail/{event}', 'EventController@eventdetail');
Route::get('/manageevent', 'EventController@index');
Route::get('/events/create', 'EventController@create');
Route::post('/manageevent', 'EventController@store');
Route::get('/events/{event}/edit', 'EventController@edit');
Route::patch('/events/{event}', 'EventController@update');
Route::delete('/events/{event}', 'EventController@destroy');

Route::get('/men-tops', 'ManController@tops');
Route::get('/men-tops/detail/{product}', 'ManController@topsdetail');
Route::get('/men-bottoms', 'ManController@bottoms');
Route::get('/men-shoes', 'ManController@shoes');
Route::get('/men-accessories', 'ManController@accessories');
Route::get('/men-new', 'ManController@new');
Route::get('/men-sale', 'ManController@sale');
Route::get('/men', 'ManController@men');
Route::get('/men', 'ManController@index');

Route::get('/women', 'WomenController@women');
Route::get('/women-tops', 'WomenController@tops');
Route::get('/women-bottoms', 'WomenController@bottoms');
Route::get('/women-shoes', 'WomenController@shoes');
Route::get('/women-accessories', 'WomenController@accessories');
Route::get('/women-new', 'WomenController@new');
Route::get('/women-sale', 'WomenController@sale');
Route::get('/women', 'WomenController@index');


//route for debug

Route::get('/read_product', function () {
    $order = Order::find(1);

    $products = $order->product;

    foreach ($products as $product) {
        echo $product->productname . '<br>';
    }
});

Route::get('/check', function () {

    //check order dengan id 1
    // $order = Order::find(1);
    // //menambahkan value ke order_product dengan value order_id 1 dan product_id 4
    // $order->product()->attach(4);
    // return $order;


    // return Order::with('user')->get();

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

    // $user = User::onlyTrashed()->get();
    // dd($user);

    // $reviews = Review::all();
    // $product_tops = Product::where('id', '=', 1)->first();

    // foreach ($reviews as $review) {
    //     if ($review->product_id == $product_tops->id) {
    //     }
    // }

    // $cartlist = product_user::onlyTrashed()->get();

    // dd($cartlist);

    //     $Order = Order::find(1);
    // dd($Order->address_delivery_users);

});
