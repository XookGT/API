<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorial_days', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tutoria')->unsigned();
            $table->integer('id_place')->unsigned();
            $table->integer('id_day')->unsigned();
            $table->dateTime('start_time');
            $table->dateTime('end_time');

             $table->foreign('id_tutoria')
                ->references('id')
                ->on('tutorial_has_places')
                ->onDelete('cascade');

             $table->foreign('id_place')
                ->references('id')
                ->on('tutorial_has_places')
                ->onDelete('cascade');

             $table->foreign('id_day')
                ->references('id')
                ->on('days')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutorial_days');
    }
}
