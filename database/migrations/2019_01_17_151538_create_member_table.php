<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('group_id');
            $table->foreign('group_id')
                  ->references('id')->on('group')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->unsignedInteger('department_id');
            $table->foreign('department_id')
                  ->references('id')->on('department')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->enum('age_category', ['elder', 'youth', 'teenager', 'kid', 'infant']);
            $table->string('birth_date');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('member_code')->unique();
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
        Schema::dropIfExists('member');
        Schema::table('member', function (Blueprint $table) {
            $table->dropForeign('member_group_id_foreign');
        });
        Schema::table('member', function (Blueprint $table) {
            $table->dropForeign('member_department_id_foreign');
        });
    }
}
