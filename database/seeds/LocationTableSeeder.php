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
                'name' => 'Luisa 1st flr'
            ],
            [
                'name' => 'Luisa 2nd flr'
            ],
            [
                'name' => 'Luisa 3rd flr'
            ],
            [
                'name' => 'Luisa 4th flr'
            ],
            [
                'name' => 'Filandial 1st flr'
            ],
            [
                'name' => 'Filandial 2nd flr'
            ],
            [
                'name' => 'Filandial 3rd flr'
            ],
            [
                'name' => 'Filandial 4th flr'
            ],
            [
                'name' => 'Front Storage'
            ],
            [
                'name' => 'Back Storage'
            ]

        ];
        DB::table('locations')->insert($location);
    }
}
