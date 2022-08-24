<?php

namespace Database\Seeders;

use App\Models\PageSetting;
use Illuminate\Database\Seeder;

class PageSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageSetting = new PageSetting();
        $pageSetting->name = 'activity';
        $pageSetting->title = 'Faaliyetler';
        $pageSetting->description = 'Faaliyetler';
        $pageSetting->image = 'https://media.gettyimages.com/vectors/abstract-globe-background-vector-id1311148884?s=612x612';
        $pageSetting->save();


        $pageSetting2 = new PageSetting();
        $pageSetting2->name = 'collaboration';
        $pageSetting2->title = 'İşbirliklerimiz';
        $pageSetting2->description = 'İşbirliklerimiz';
        $pageSetting2->image = 'https://media.gettyimages.com/vectors/abstract-globe-background-vector-id1311148884?s=612x612';
        $pageSetting2->save();

        $pageSetting3 = new PageSetting();
        $pageSetting3->name = 'news';
        $pageSetting3->title = 'Haberler';
        $pageSetting3->description = 'Haberler';
        $pageSetting3->image = 'https://media.gettyimages.com/vectors/abstract-globe-background-vector-id1311148884?s=612x612';
        $pageSetting3->save();
    }
}
