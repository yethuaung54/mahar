<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(UserTableSeeder::class);
        // $this->call(DealersTableSeeder::class);
        // $this->call(CategoryTableSeeder::class);
        // $this->call(ProductTableSeeder::class);
          $this->call(OrderTableSeeder::class);
           // $this->call(OrderDetailTableSeeder::class);
    }
}
