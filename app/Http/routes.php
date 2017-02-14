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

    Route::get('login', 'Dealer\Auth\Authcontroller@showLoginForm');
    Route::post('login', 'Dealer\Auth\Authcontroller@login');
    Route::get('logout', 'Dealer\Auth\Authcontroller@logout');
    // For Vendor Register
    Route::get('register', 'Dealer\Auth\Authcontroller@showRegistrationForm');
    Route::post('register', 'Dealer\Auth\Authcontroller@register');

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
Route::group(['prefix' => 'vendor'], function () {

    Route::get('home', 'VendorController@index');
    Route::get('myposts', 'VendorController@myPosts');
    Route::get('buyerposts', 'VendorController@buyerPosts');
    Route::get('newitem', 'VendorController@newItem');
    

});

Route::auth();

