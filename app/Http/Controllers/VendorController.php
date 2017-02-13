<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VendorController extends Controller
{
    public function index()
    {
        return view('vendors.home');
    }

    public function myPosts()
    {
        return view('vendors.myposts');
    }

    public function buyerPosts()
    {
        return view('vendors.buyerposts');
    }

    public function newItem()
    {
        return view('vendors.newitem');
    }
}
