<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTablSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        $products =[
            [
                'serial' => rand(1000, 2000),
                'quantity' => rand(1,10),
                'brand_id' => rand(1,3),
                'location_id' => rand(1,3),
                'manufacture_id' => rand(1,3),
                'description_id' => rand(1,3),
                'category_id' => rand(1,3),
            ],
            [
                'serial' => rand(1000, 2000),
                'quantity' => rand(1,10),
                'brand_id' => rand(1,3),
                'location_id' => rand(1,3),
                'manufacture_id' => rand(1,3),
                'description_id' => rand(1,3),
                'category_id' => rand(1,3),

            ],
            [
                'serial' => rand(1000, 2000),
                'quantity' => rand(1,10),
                'brand_id' => rand(1,3),
                'location_id' => rand(1,3),
                'manufacture_id' => rand(1,3),
                'description_id' => rand(1,3),
                'category_id' => rand(1,3),
            ],
            [
                'serial' => rand(1000, 2000),
                'quantity' => rand(1,10),
                'brand_id' => rand(1,3),
                'location_id' => rand(1,3),
                'manufacture_id' => rand(1,3),
                'description_id' => rand(1,3),
                'category_id' => rand(1,3),
            ],
            [
                'serial' => rand(1000, 2000),
                'quantity' => rand(1,10),
                'brand_id' => rand(1,3),
                'location_id' => rand(1,3),
                'manufacture_id' => rand(1,3),
                'description_id' => rand(1,3),
                'category_id    ' => rand(1,3),
            ]
        ];
        DB::table('products')->insert($products);
    }
}
