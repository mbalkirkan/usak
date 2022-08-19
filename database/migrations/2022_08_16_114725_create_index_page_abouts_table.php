<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexPageAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_page_abouts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('main_title');
            $table->text('description');
            $table->text('image');
            $table->text('collaboration_1_title');
            $table->text('collaboration_1_description');
            $table->text('collaboration_2_title');
            $table->text('collaboration_2_description');
            $table->text('collaboration_3_title');
            $table->text('collaboration_3_description');
            $table->text('collaboration_4_title');
            $table->text('collaboration_4_description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('index_page_abouts');
    }
}
