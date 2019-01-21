<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGivingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giving', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('member_id');
            $table->foreign('member_id')
                  ->references('id')->on('member')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('item')->nullable();
            $table->string('amount')->nullable();
            $table->string('transaction_code')->nullable();
            $table->dateTime('date_of_giving')->nullable();
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
        Schema::dropIfExists('giving');
        Schema::table('giving', function (Blueprint $table) {
            $table->dropForeign('giving_member_id_foreign');
        });
    }
}
