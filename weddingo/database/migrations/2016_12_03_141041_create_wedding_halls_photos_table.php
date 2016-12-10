<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingHallsPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_halls_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wedding_hall_id');
            $table->integer('photo_title_id');
            $table->string('url')->unique();

            $table->foreign('wedding_hall_id')->references('id')->on('wedding_halls');
            $table->foreign('photo_title_id')->references('id')->on('wedding_halls_photo_titles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wedding_halls_photos');
    }
}
