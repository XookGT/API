<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('creation_date');
            $table->dateTime('programming_date');
            $table->decimal('hour_cost', 5, 2);
            $table->integer('hour');
            $table->decimal('total_cost', 5, 2);

            $table->integer('state')->unsigned();
            $table->integer('user')->unsigned();
            $table->integer('tutorial_place')->unsigned();


            $table->foreign('state')
                ->references('id')
                ->on('state_purchase_orders')
                ->onDelete('cascade');

            $table->foreign('user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            
            $table->foreign('tutorial_place')
                ->references('id')
                ->on('tutorial_has_places')
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
        Schema::dropIfExists('purchase_orders');
    }
}
