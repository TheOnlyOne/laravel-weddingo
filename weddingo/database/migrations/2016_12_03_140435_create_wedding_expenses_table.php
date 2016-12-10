<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_expenses', function (Blueprint $table) {
            $table->integer('wedding_id');
            $table->integer('expense_type_id');
            $table->integer('price');

            $table->foreign('wedding_id')->references('id')->on('weddings');
            $table->foreign('expense_type_id')->references('id')->on('expenses_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wedding_expenses');
    }
}
