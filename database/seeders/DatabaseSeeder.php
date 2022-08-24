<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthTableSeeder::class);
        $this->call(IndexPageAboutTableSeeder::class);
        $this->call(IndexPageNumberTableSeeder::class);
        $this->call(ActivityCategoryTableSeeder::class);
        $this->call(PageSettingTableSeeder::class);
    }
}
