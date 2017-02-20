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

Route::get('/', function () {
    return redirect('/user/home');
});

Route::get('/hello', function (Task $task) {
    return $task->get();
});

//Unguard routes that can access any user
Route::get('item/{slug}', 'Customer\CustomerController@itemDetail');
Route::get('category/{slug}', 'Customer\CustomerController@showCategory');
Route::get('home', 'Customer\CustomerController@index');
Route::get('about', 'Customer\CustomerController@about');
Route::get('contact', 'Customer\CustomerController@contact');

Route::group(['prefix' => 'admin'], function () {
    Route::get('loginform', 'AdminController@loginForm');
    Route::get('home', 'AdminController@index');
    Route::get('vendorposts', 'AdminController@vendorPost');
    Route::get('buyerposts', 'AdminController@buyerPost');
    Route::get('myaccount', 'AdminController@myAccount');
    Route::get('allusers', 'AdminController@allUser');

});

Route::auth();
