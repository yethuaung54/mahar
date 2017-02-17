<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dealer;
use App\Http\Requests;
use Auth;
use Validator;
use App\Http\Requests\VendorAccountRequest;
use App\Http\Requests\VendorItemRequest;
// Model namespace
use App\Category;
use App\Product;

class VendorController extends Controller
{
    protected $dealerId;

    public function __construct() {
        $this->middleware('dealer');
        $this->dealerId = Auth::guard('dealer')->user()->id;
    }

    public function index()
    {
        $products =  Product::where('dealer_id', $this->dealerId)
                     ->OrderBy('id','desc')
                     ->limit(5)->get();

        return view('vendors.home', compact('products'));
    }

    public function myPosts()
    {
        $products = Product::where('dealer_id', $this->dealerId)->orderBy('id','desc')->paginate(5);
   
        return view('vendors.myposts', compact('products'));
    }

    public function buyerPosts()
    {
        return view('vendors.buyerposts');
    }

    public function newItem(Request $request)
    {
        $categories = Category::all();
        return view('vendors.newitem', compact('categories'));
    }

    public function saveItem(VendorItemRequest $request)
    {
        $dealer = Auth::guard('dealer')->user();
       
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $tempFileName = $this->genFileName($file->getClientOriginalExtension());
            $file->move('assets/images/dealer', $tempFileName);
            $filePath = 'assets/images/dealer/'.$tempFileName;
        }

        $data = $request->except(['_token','image','_url']);

        $data['dealer_id'] = $dealer->id;
        $data['slug'] = $data['name'] .'-'. random_int(100, 10000);
        $data['image_url'] = $filePath;
        
        Product::create($data);

       return redirect('dealer/newitem')->with('success','Your new item has been succesfully saved!');

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

    protected function genFileName($extension) { 
        $s = strtoupper(md5(uniqid(rand(),true))); 
        $guidText = 
            substr($s,0,8) . '-' . 
            substr($s,8,4) . '-' . 
            substr($s,12,4). '-' . 
            substr($s,16,4). '-' . 
            substr($s,20); 
        return $guidText .".". $extension;
    }

}
