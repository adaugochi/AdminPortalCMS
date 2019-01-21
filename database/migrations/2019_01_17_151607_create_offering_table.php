<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offering', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('member_id');
            $table->foreign('member_id')
                  ->references('id')->on('member')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('amount');
            $table->string('transaction_code')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->string('member_code');
            $table->text('raw')->nullable();
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
        Schema::dropIfExists('offering');
        Schema::table('offering', function (Blueprint $table) {
            $table->dropForeign('offering_member_id_foreign');
        });
    }
}
