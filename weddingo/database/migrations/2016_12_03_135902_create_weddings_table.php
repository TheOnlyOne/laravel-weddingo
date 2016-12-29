<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weddings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('groom_name');
            $table->string('bride_name');
            $table->date('date');
            $table->integer('wedding_hall_id');
            $table->integer('template_id')->nullable();

            $table->foreign('wedding_hall_id')->references('id')->on('wedding_halls');
            $table->foreign('template_id')->references('id')->on('wedding_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weddings');
    }
}
