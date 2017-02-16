<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dealer;
use App\Http\Requests;
use Auth;
use Validator;
use App\Http\Requests\VendorAccountRequest;

class VendorController extends Controller
{
    public function __construct() {
        $this->middleware('dealer');
    }

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

    public function loginForm()
    {
        return view('vendors.loginform');
    }

    public function myAccount()
    {
        $user = Auth::guard('dealer')->user();
      
        return view('vendors.myaccount' , compact('user'));
    }

    public function updateAccount (VendorAccountRequest $request)
    {   
        $request->validate();
        $user = Auth::guard('dealer')->user();
        $user->update($request->all());

        return redirect('dealer/myaccount')->with('success','Your update request has been succesfully updated!');
    }

}
