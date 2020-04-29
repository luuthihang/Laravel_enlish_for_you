<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_story', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en');
            $table->string('title_vn');
            $table->text('content_en');
            $table->text('content_vn');
            $table->char('image1');
            $table->char('image2');
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
        Schema::dropIfExists('tbl_story');
    }
}
