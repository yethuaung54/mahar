<?php

/**
 * @author HlaingTinHtun <hlaingtinhtun@gmail.com>
 * @copyright 2017 - Freelance Inc.
 **/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class HomeController extends Controller
{
    
    // public function __construct() {
    //     $this->middleware('dealer');
    // }

    public function index()
    {
        return view('customers.index');
    }

    public function about()
    {
        return view('customers.about');
    }

    public function contact()
    {
        return view('customers.contact');
    }

    public function loginForm()
    {
        return view('customers.auth');
    }

    public function itemDetail()
    {
        return view('customers.detail');
    }

    public function wishList()
    {
        return view('customers.wishlist');
    }

    public function itemCategory()
    {
        return view('customers.itemcategory');
    }

    public function orderForm()
    {
        return view('customers.order');
    }

    public function account()
    {
        return view('customers.accountview');
    }
}
