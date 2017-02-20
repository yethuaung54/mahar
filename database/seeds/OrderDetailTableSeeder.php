<?php

use Illuminate\Database\Seeder;
use App\OrderDetail;
use Faker\Factory as Faker;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$faker = Faker::create();
            //
            foreach (range(1, 10) as $index) {
            		OrderDetail::create([
            	        	        'order_id' => $faker->numberBetween(2,5) ,
            	        	        'price_each' => $faker->randomNumber(2) ,
            	        	        'quantity' => $faker->numberBetween(1,10) // role id 2 for Dealer
            	    ]);
            }
    }
}
