<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $fillable = ['id','address','township','product_id','dealer_id','customer_id','price','order_date','created_at','updated_at'];
}
