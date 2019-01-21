<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSundaySchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sunday_school', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ministered_by');
            $table->string('topic');
            $table->string('content')->nullable();
            $table->dateTime('date_time')->nullable();
            $table->integer('total_attendees')->nullable();
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
        Schema::dropIfExists('sunday_school');
    }
}
