<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Task;

Route::get('/', function(){
    return redirect('/user/home');
});

Route::get('/hello', function(Task $task) {
    return $task->get();
});

Route::group(['prefix' => 'dealer'], function () {

    Route::get('login', 'Dealer\Auth\AuthController@showLoginForm');
    Route::post('login', 'Dealer\Auth\AuthController@login');
    Route::get('logout', 'Dealer\Auth\AuthController@logout');
    // For Vendor Register
    Route::get('registerform', 'Dealer\Auth\AuthController@showRegistrationForm');
    Route::post('register', 'Dealer\Auth\AuthController@register');

    Route::get('home', 'VendorController@index');
    Route::get('myposts', 'VendorController@myPosts');
    Route::get('buyerposts', 'VendorController@buyerPosts');
    Route::get('newitem', 'VendorController@newItem');
    Route::get('loginform', 'VendorController@loginForm');
    Route::get('myaccount', 'VendorController@myAccount');

});

Route::group(['prefix' => 'user'], function () {

    Route::get('home', 'HomeController@index');
    Route::get('about', 'HomeController@about');
    Route::get('contact', 'HomeController@contact');
    Route::get('loginform', 'HomeController@loginForm');
    Route::get('itemdetail', 'HomeController@itemDetail');
    Route::get('itemcategory', 'HomeController@itemCategory');
    Route::get('wishlist', 'HomeController@wishList');
    Route::get('orderform', 'HomeController@orderForm');
    Route::get('myaccount', 'HomeController@account');

});
Route::group(['prefix'=>'admin'],function(){
   Route::get('loginform','AdminController@loginForm');
   Route::get('home','AdminController@index');
   Route::get('vendorposts','AdminController@vendorPost');
   Route::get('buyerposts','AdminController@buyerPost');
   Route::get('myaccount','AdminController@myAccount');
   Route::get('allusers','AdminController@allUser');

});

Route::auth();
