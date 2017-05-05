<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
           
            $table->integer('tutorial_id')->unsigned();
            $table->integer('bill_id')->unsigned();
            $table->integer('stars');

            $table->primary(['tutorial_id', 'bill_id']);


            $table->foreign('id_tutoria')
                ->references('id')
                ->on('tutorials')
                ->onDelete('cascade');

            $table->foreign('bill_id')
                ->references('id')
                ->on('bills')
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
        Schema::dropIfExists('scores');
    }
}
