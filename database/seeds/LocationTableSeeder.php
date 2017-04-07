<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->truncate();
        $location =[
            [
                'name' => 'Luisa'
            ],
            [
                'name' => 'Filandial'
            ]
        ];
        DB::table('locations')->insert($location);
    }
}
