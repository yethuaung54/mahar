<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
	        $product = new Product();
	        $product->name = $faker->name;
	        $product->descr = $faker->text;
	        $product->slug = $faker->slug;
	        $product->price = $faker->randomNumber(2);
	        $product->quantity = $faker->numberBetween(1,100);
	        $product->image_url = $faker->image($dir = 'public', $width = 640, $height = 480);
	        $product->hashtag = "#abc #cde #def";
	        $product->custom_field = json_encode(['key'=> $faker->name , 'value'=> $faker->randomNumber]);
	        $product->cat_id = $faker->numberBetween(1,10);
	        $product->dealer_id = $faker->numberBetween(1,5);
	        $product->save();
         }
    }
}
