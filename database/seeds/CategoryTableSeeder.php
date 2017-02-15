<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
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
	        $category = new Category;
	        $category->name = $faker->name;
	        $category->weight = $faker->numberBetween(1,10);
	        $category->slug = $faker->slug;
	        $category->save();
        }

        // $array = ['Hello' , 'Blah', 'aabc', 'dae'];
        // foreach ($array as $key => $value) {
        // 		 $category = new Category;
        // 	     $category->name = $value;
        // 	     $category->weight = $key;
        // 	     $category->save();
        // }

    }
}
