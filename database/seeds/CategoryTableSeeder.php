<?php

use Illuminate\Database\Seeder;
use App\Category;

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
     
        $array = ['Hello' , 'Blah', 'aabc', 'dae'];
        foreach ($array as $key => $value) {
        		 $category = new Category;
        	     $category->name = $value;
        	     $category->weight = $key;
        	     $category->save();
        }

    }
}
