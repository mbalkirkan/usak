<?php

namespace Database\Seeders;

use App\Models\Pages\ActivityCategory;
use Illuminate\Database\Seeder;

class ActivityCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActivityCategory::create([
            'name' => 'Eğitim',
            'en_name' => 'Education',
        ]);
        ActivityCategory::create([
            'name' => 'Etkinlik',
            'en_name' => 'Activity',
        ]);
    }
}
