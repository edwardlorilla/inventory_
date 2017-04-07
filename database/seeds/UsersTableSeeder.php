<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        $users = [
            [
                'name' => 'Ellen Acharon',
                'email' => 'EllenAcharon@email.com',
                'password' => bcrypt('edward')
            ]
        ];
        DB::table('users')->insert($users);
    }
}
