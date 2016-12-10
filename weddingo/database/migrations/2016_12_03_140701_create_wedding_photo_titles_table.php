<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingPhotoTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_photo_title', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wedding_id')->nullable();
            $table->string('title');

            $table->foreign('wedding_id')->references('id')->on('weddings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wedding_photo_title');
    }
}
