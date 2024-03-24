<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'panasonic Tv',
                'price'=>'200',
                'description'=>'A smart tv with 4gb ram',
                'category'=>'home appliance',
                'gallery'=>'https://unsplash.com/photos/white-smartphone-near-laptop-xsGxhtAsfSA',
            ],[
                'name'=>'oppo mobile',
                'price'=>'300',
                'description'=>'A smartphone with 4gb ram',
                'category'=>'mobile',
                'gallery'=>'https://unsplash.com/photos/white-smartphone-near-laptop-xsGxhtAsfSA',
            ],[
                'name'=>'Sony Tv',
                'price'=>'200',
                'description'=>'A smart tv with 8gb ram',
                'category'=>'mobile',
                'gallery'=>'https://unsplash.com/photos/white-smartphone-near-laptop-xsGxhtAsfSA',
            ],[
                'name'=>'LG fridge',
                'price'=>'200',
                'description'=>'A fridge',
                'category'=>'mobile',
                'gallery'=>'https://unsplash.com/photos/white-smartphone-near-laptop-xsGxhtAsfSA',
            ]
        ]);
    }
}

