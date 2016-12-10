<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyingInvitationsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buying_invitation_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->dateTime('date');
            $table->integer('package_id');
            $table->integer('amount');
            $table->double('total_price');
            $table->boolean('is_deleted')->default(0);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('package_id')->references('id')->on('packages_invitations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buying_invitation_history');
    }
}
