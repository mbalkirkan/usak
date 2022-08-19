<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndexPageAboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indexPageAbout = new \App\Models\Pages\Index\IndexPageAbout();
        $indexPageAbout->title = 'Uşak DTS';
        $indexPageAbout->main_title = 'Uşak Tekstil ve Seramik Tasarım Uygulama ve Araştırma Merkezi';
        $indexPageAbout->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla qu';
        $indexPageAbout->image = 'https://5.imimg.com/data5/OI/QA/MY-34876737/mens-black-leather-jacket-500x500.jpg';
        $indexPageAbout->collaboration_1_title = 'Uşak DTS';
        $indexPageAbout->collaboration_1_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis';
        $indexPageAbout->collaboration_2_title = 'Uşak DTS';
        $indexPageAbout->collaboration_2_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis';
        $indexPageAbout->collaboration_3_title = 'Uşak DTS';
        $indexPageAbout->collaboration_3_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis';
        $indexPageAbout->collaboration_4_title = 'Uşak DTS';
        $indexPageAbout->collaboration_4_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis';
        $indexPageAbout->save();



    }
}
