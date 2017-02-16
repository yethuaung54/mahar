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
    return redirect('home');
});

Route::get('/hello', function(Task $task) {
    return $task->get();
});

Route::group(['prefix' => 'user'], function () {
 
    Route::get('login', function(){ return redirect('login'); });
    Route::get('wishlist', 'UserController@wishList');
    Route::get('orderform', 'UserController@orderForm');
    Route::get('myaccount', 'UserController@account');
    Route::get('logout', 'Auth\AuthController@logout');
  
});

Route::group(['prefix'=>'admin'],function(){
   Route::get('login','AdminController@login');
   Route::get('home','AdminController@index');
   Route::get('vendorposts','AdminController@vendorPost');
   Route::get('buyerposts','AdminController@buyerPost');
   Route::get('myaccount','AdminController@myAccount');
   Route::get('allusers','AdminController@allUser');

});

Route::auth();

Route::get('home', 'HomeController@index');
Route::get('contact', 'HomeController@contact');
Route::get('about', 'HomeController@about');
Route::get('itemdetail', 'HomeController@itemDetail');
Route::get('itemcategory', 'HomeController@itemCategory');
