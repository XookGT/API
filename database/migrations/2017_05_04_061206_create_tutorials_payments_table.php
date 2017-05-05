<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialsPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorials_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('description',50)->nullable;
            $table->decimal('subtotal',5,2);
            $table->decimal('porcentage',3,2);
            $table->decimal('total',5,2);


            $table->integer('tutorial_has_place_id')->unsigned();
            $table->integer('state_tutorial_payment_id')->unsigned();
            $table->integer('tutor_payment_id')->unsigned();


            $table->foreign('tutorial_has_place_id')
                ->references('id')
                ->on('tutorial_has_places')
                ->onDelete('cascade');


            $table->foreign('state_tutorial_payment_id')
                ->references('id')
                ->on('state_tutorial_payments')
                ->onDelete('cascade');

            $table->foreign('tutor_payment_id')
                ->references('id')
                ->on('tutor_payments')
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
        Schema::dropIfExists('tutorials_payments');
    }
}
