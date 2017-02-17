<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   //
    protected $table = "products";
    protected $fillable = [
        'name' , 
        'cat_id' , 
        'hashtag' , 
        'descr' , 
        'price' ,
        'quantity' , 
        'dealer_id',
        'slug',
        'image_url'
    ];

    /**
     * Display the specified resource.
     *
     * @param  int  
     * @return Response
     */
    public function dealer ()
    {
    	
    	return $this->belongsTo(Dealer::class);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  
     * @return Response
     */
    public function category()
    {
    
    	return $this->belongsTo(Category::class,'cat_id');
    
    }
}
