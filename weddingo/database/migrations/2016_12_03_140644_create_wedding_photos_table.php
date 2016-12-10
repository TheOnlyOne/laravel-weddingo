<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wedding_id');
            $table->integer('photo_title_id');
            $table->string('url')->unique();

            $table->foreign('wedding_id')->references('id')->on('weddings');
            $table->foreign('photo_title_id')->references('id')->on('wedding_photo_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wedding_photos');
    }
}
