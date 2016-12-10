<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingHallsManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_halls_managers', function (Blueprint $table) {
            $table->integer('wedding_hall_id');
            $table->integer('user_id');

            $table->foreign('wedding_hall_id')->references('id')->on('wedding_halls');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wedding_halls_managers');
    }
}
