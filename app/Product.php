<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   //
    protected $table = "products";

    protected $fillable = ['id','name','descr','price','quantity','image_url','hashtag','custom_field','slug','cat_id','dealer_id','created_at','updated_at'];

    /**
     * Display the specified resource.
     *
     * @param  int  
     * @return Response
     */
    public function user ()
    {
    	return $this->belongsTo(User::class);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  
     * @return Response
     */
    public function Category()
    {
        return $this->belongsTo('App\Category', 'cat_id', 'id');
    }

    public function Wishlist()
    {
        return $this->hasMany('App\WishList');
    }
}
