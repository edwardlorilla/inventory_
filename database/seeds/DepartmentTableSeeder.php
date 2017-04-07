<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->truncate();
        $departments =[
            [
                'name' => 'dapartment1'
            ],
            [
                'name' => 'dapartment2'
            ],
            [
                'name' => 'dapartment3'
            ],
            [
                'name' => 'dapartment4'
            ],
            [
                'name' => 'dapartment5'
            ],
            [
                'name' => 'dapartment6'
            ],
        ];
        DB::table('departments')->insert($departments);
    }
}
