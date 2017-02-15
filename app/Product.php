<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   //
    protected $table = "products";
    // protected $fillable = ['name'];

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
    public function category ()
    {
    
    	return $this->belongsTo(User::class);
    
    }
}
