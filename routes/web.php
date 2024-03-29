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
use App\Trending;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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


Route::group(['middleware' =>  'auth'], function () {

    // USER
    Route::patch('/users/cstm/{user}', 'UserController@update');
    Route::delete('/delete-my-account/{user}', 'UserController@deleteMyAccount');
    Route::get('/userprofile', 'UserController@index');
    Route::get('/usersettings', 'UserController@usersettings');
    Route::post('/users/changepassword', 'UserController@changePassword');

    // PRODUCTWISH
    Route::get('/product-wish', 'ProductController@productwish');
    Route::post('/wish-list/save', 'ProductController@productwishsave');
    Route::delete('/wish-list/delete/{id}', 'ProductController@destroywish');

    //CART
    Route::delete('/wish-list/addtocart/{id}', 'ProductController@addtocart');
    Route::post('/addtocart/{id}', 'ProductController@addtocartt');
    Route::post('/cart-list/add', 'ProductController@addtocartviadetail');
    Route::get('/product-cart', 'ProductController@productcart');
    Route::delete('/product-cart/delete/{id}', 'ProductController@destroylist');

    //CHECKOUT
    Route::post('/checkout', 'OrderController@checkout');
    Route::get('/transactions/delivery', 'OrderController@viewCheckOut');
    Route::get('/transactions/ordersummary', 'OrderController@viewSummary')->name('order.summary.checkout');
    Route::get('/payment', 'OrderController@paymentView');
    //delivery
    Route::get('/checkout/delivery', 'OrderController@delivery');
    Route::get('/delivery/address/{id}', 'OrderController@chooseaddress');
    Route::post('/delivery/addaddress', 'OrderController@addaddress');
    Route::post('/payment', 'OrderController@payment');
    Route::post('/order-summary', 'OrderController@summary');
    Route::post('/makepayment', 'OrderController@makepayment');

    // BUYNOW
    Route::get('/buy-now/{id}', 'BuynowController@buynow');
    Route::post('/buy-now/add', 'BuynowController@buyNowQuantity');
    Route::post('order-summary-buy-now', 'BuynowController@summary');
    Route::post('/payment/buy_now', 'BuynowController@payment');
    Route::post('/makepayment/buy_now', 'BuynowController@makepayment');
    Route::post('/delivery/addaddress/buy_now', 'BuynowController@addaddress');
    // Flash data transaction (BuynowController)
    Route::get('/transactions/delivery_buy_now', 'BuynowController@assignAddressDelivery');
    Route::get('/transactions/ordersummary_buy_now', 'BuynowController@orderSummaryBuyNow')->name('order.summary');
    Route::get('/transactions/payment_buy_now', 'BuynowController@paymentBuyNow');

    // VOUCHER
    Route::post('/voucher/store', 'VouchersController@store')->name('voucher.store');
    Route::post('/voucher', 'VouchersController@storeCheckout')->name('voucher.store.checkout');
    Route::delete('/voucher/destroy', 'VouchersController@destroy')->name('voucher.destroy');
    Route::delete('/voucher', 'VouchersController@destroyCheckout')->name('voucher.destroy.checkout');

    // HISTORY
    Route::get('/payment-history', 'StatusController@payment_history');
    Route::get('/payment-history/{id}/detail', 'StatusController@payment_history_detail');
    Route::get('/payment-history/{id}/continue-checkout', 'StatusController@continue_checkout'); // Continue Checkout
    Route::get('/waiting-for-review', 'StatusController@waiting_for_review');
    Route::get('/products/review/{id}', 'StatusController@product_review_detail');
    Route::post('/submit/review', 'StatusController@product_submit_review');
    Route::get('/payment-history/buy-again/{product}', 'StatusController@buyAgain');

    // RAFFLE
    Route::get('/raffle', 'RaffleController@raffle');
    Route::get('/raffles/checkout/{id}', 'RaffleController@raffleCheckout');
    Route::get('/raffles/checkout', 'RaffleController@raffleCheckoutView');
    Route::post('/raffles/summary', 'RaffleController@raffleSummary');
    Route::get('/raffles/summary', 'RaffleController@raffleSummaryView');
    Route::get('/raffles/payment', 'RaffleController@rafflePayment');
    Route::post('/raffles/makepayment', 'RaffleController@raffleMakePayment');
    Route::get('/raffles/payment_history', 'RaffleController@rafflePaymentHistory');
    Route::post('/raffle/submit', 'RaffleController@submit');
    Route::get('/raffle/history', 'RaffleController@history');
});

Route::group(['middleware' =>  'role:admin'], function () {

    // USER
    Route::get('/users/create', 'UserController@create');
    Route::post('/users/create', 'UserController@store');
    Route::get('/users/{user}/edit', 'UserController@edit');
    Route::get('/usercontrol', 'UserController@usercontrol');
    Route::patch('/users/adm/{user}', 'UserController@updateadm');
    Route::delete('/users/{user}', 'UserController@destroy');


    // BRAND
    Route::get('/managebrand', 'BrandController@index');
    Route::get('/brands/create', 'BrandController@create');
    Route::post('/managebrand', 'BrandController@store');
    Route::delete('/brands/{brand}', 'BrandController@destroy');
    Route::get('/brands/{brand}/edit', 'BrandController@edit');
    Route::patch('/brands/{brand}', 'BrandController@update');

    // PRODUCT
    Route::get('/manageproduct', 'ProductController@index');
    Route::get('/products/create', 'ProductController@create');
    Route::post('/manageproduct', 'ProductController@store');
    Route::get('/products/{product}/edit', 'ProductController@edit');
    Route::patch('/products/{product}', 'ProductController@update');
    Route::delete('/products/{product}', 'ProductController@destroy');

    // RAFFLE
    Route::get('/manageraffle', 'RaffleController@index');
    Route::post('/manageraffle', 'RaffleController@store');
    Route::get('/raffles/create', 'RaffleController@create');
    Route::get('/raffles/check/{id}', 'RaffleController@check');
    Route::get('/raffles/check/random/{id}', 'RaffleController@random');
    Route::patch('/raffles/{raffle}', 'RaffleController@update');
    Route::delete('/raffles/{raffle}', 'RaffleController@destroy');
    Route::get('/raffles/{raffle}/edit', 'RaffleController@edit');

    // EVENT
    Route::get('/manageevent', 'EventController@index');
    Route::get('/events/create', 'EventController@create');
    Route::post('/manageevent', 'EventController@store');
    Route::get('/events/{event}/edit', 'EventController@edit');
    Route::patch('/events/{event}', 'EventController@update');
    Route::delete('/events/{event}', 'EventController@destroy');
});

Route::group(['middleware' =>  'role:customer'], function () {
});



//notiification 
Route::get('/test', function () {
    $notifications = auth()->user()->unreadNotifications;
    foreach ($notifications as $notification) {
        dd($notification->data['user']['name']); //buat yang duplicate array
    }
});

Route::get('/markAsRead', function () {
    auth()->user()->unreadNotifications->markAsRead();
});


// Route::delete('/notification-/delete/{id}', 'NotificationController@destroywish');
Route::get('/notification', 'NotificationController@show');

// Check again this route
// Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'ProductController@home')->name('home');
Route::get('/search', 'ProductController@search')->name('search');
Route::get('/pagehome', 'PageController@home')->middleware('auth');
Route::get('/homeman', 'PageController@homeman')->name('homeman');;
Route::get('/itemlist', 'PageController@itemlist');
Route::get('/itemdetail', 'PageController@itemdetail');
Route::get('/itemdetail', 'PageController@itemdetail');

//GUEST
Route::get('/raffle', 'RaffleController@raffleGuest');
Route::get('/allraffle', 'RaffleController@allraffle');
Route::post('/allraffle', 'RaffleController@sortRaffle')->name('allraffle');
Route::get('/raffle/detail/{raffle}', 'RaffleController@raffledetail');
Route::get('/raffle/description/{raffle}', 'RaffleController@raffledescription');

Route::get('/brands/{brand}', 'BrandController@show');
Route::get('/allbrand', 'BrandController@allbrand')->name('brand');

Route::get('/event', 'EventController@event');
Route::get('/events/detail/{event}', 'EventController@eventdetail');

Route::get('/product/detail/{product}', 'ManController@topsdetail');

// Route::get('/men-new', 'ManController@new');
// Route::get('/men-sale', 'ManController@sale');
// Route::get('/men', 'ManController@men');
Route::get('/men', 'ManController@men')->name('men');
Route::post('/men', 'ManController@men')->name('men');
Route::get('/men-tops', 'ManController@tops');
Route::post('/men-tops', 'ManController@tops')->name('men-tops');
Route::get('/men-bottoms', 'ManController@bottoms');
Route::post('/men-bottoms', 'ManController@bottoms')->name('men-bottoms');
Route::get('/men-shoes', 'ManController@shoes');
Route::post('/men-shoes', 'ManController@shoes')->name('men-shoes');
Route::get('/men-accessories', 'ManController@accessories');
Route::post('/men-accessories', 'ManController@accessories')->name('men-accessories');

Route::get('/women', 'WomenController@women');
Route::post('/women', 'WomenController@women')->name('women');
Route::get('/women-tops', 'WomenController@tops');
Route::post('/women-tops', 'WomenController@tops')->name('women-tops');
Route::get('/women-bottoms', 'WomenController@bottoms');
Route::post('/women-bottoms', 'WomenController@bottoms')->name('women-bottoms');
Route::get('/women-shoes', 'WomenController@shoes');
Route::post('/women-shoes', 'WomenController@shoes')->name('women-shoes');
Route::get('/women-accessories', 'WomenController@accessories');
Route::post('/women-accessories', 'WomenController@accessories')->name('women-accessories');

Route::get('/search', 'ProductController@search')->name('search');
Route::get('/top', 'ProductController@tops');
Route::get('/shoes', 'ProductController@shoes');
Route::get('/bottom', 'ProductController@bottoms');
Route::get('/accessories', 'ProductController@accessories');
Route::post('/top', 'ProductController@filterTops')->name('top');
Route::post('/shoes', 'ProductController@filterShoes')->name('shoe');
Route::post('/bottom', 'ProductController@filterBottoms')->name('bottom');
Route::post('/accessories', 'ProductController@filterAccessories')->name('accessory');


Route::post('payments/notification', 'PaymentController@notification');
Route::get('payments/completed', 'PaymentController@completed');
Route::get('payments/failed', 'PaymentController@failed');
Route::get('payments/unfinish', 'PaymentController@unfinished');

Auth::routes(['verify' => true]);

Route::get('/testing', function () {
    return view('check');
});

Route::get('/bestseller', 'ManController@bestseller');

Route::get('/about', function () {
    return view('pages/aboutus');
});

Route::get('/contact', function () {
    return view('pages/contactus');
});

// CONTACT
Route::get('/contact', 'ContactInformationController@create');
Route::post('/contact', 'ContactInformationController@store');

// FAQ
Route::get('/faq', 'FAQController@index');
Route::get('faq/detailfaqinfo/{faq}', 'DetailFAQInformationController@show');
Route::get('/termsandcondition', function () {
    return view('pages/terms');
});

// Privacy Policy
Route::get('/privacypolicy', function () {
    return view('pages/privacypolicy');
});


// Socialite Google Login
Route::get('/login/google', 'Auth\LoginController@redirectToProvider');
Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallBack');

Route::get('/check', function () {
    dd(session()->get('url.intended'));
});
