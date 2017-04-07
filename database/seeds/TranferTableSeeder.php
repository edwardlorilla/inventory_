<?php

use Illuminate\Database\Seeder;

class TranferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('$tranfers')->truncate();
        $tranfers = [
            [
                'product_id' => rand(1,5),
            ]
        ];
        DB::table('$tranfers')->insert($tranfers);
    }
}
