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
        $this->call(UsersTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(ManufactureTableSeeder::class);
        $this->call(ProductTablSeeder::class);
        $this->call(DescriptionTableSeeder::class);
        $this->call(TranferTableSeeder::class);
    }
}
