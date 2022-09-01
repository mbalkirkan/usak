<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexPageNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_page_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->string('number1_title');
            $table->string('number1');
            $table->string('number1_url');
            $table->string('number2_title');
            $table->string('number2');
            $table->string('number2_url');
            $table->string('number3_title');
            $table->string('number3');
            $table->string('number3_url');
            $table->string('number4_title');
            $table->string('number4');
            $table->string('number4_url');
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
        Schema::dropIfExists('index_page_numbers');
    }
}
