<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "product_category";

    protected $fillable = ['id','name','weight','slug','created_at','updated_at'];

    public function Product()
    {
        return $this->hasMany('App\Product');
    }
}
