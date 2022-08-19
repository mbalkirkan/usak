<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndexPageNumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $number = new \App\Models\Pages\Index\IndexPageNumber();
        $number->title = 'Uşak DTS';
        $number->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis';
        $number->image = 'https://5.imimg.com/data5/OI/QA/MY-34876737/mens-black-leather-jacket-500x500.jpg';
        $number->number1_title = 'Uşak DTS';
        $number->number1 = 145;
        $number->number2_title = 'Uşak DTS';
        $number->number2 = 145;
        $number->number3_title = 'Uşak DTS';
        $number->number3 = 145;
        $number->number4_title = 'Uşak DTS';
        $number->number4 = 145;
        $number->save();
    }
}
