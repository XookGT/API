<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nit');
            $table->dateTime('date');
            $table->decimal('cost', 5, 2);
            $table->decimal('total_cost', 5, 2);
            
            $table->integer('pucharse_order_id')->unsigned();
            $table->integer('bill_state_id')->unsigned();

            $table->foreign('pucharse_order_id')
                ->references('id')
                ->on('purchase_orders')
                ->onDelete('cascade');

            $table->foreign('bill_state_id')
                ->references('id')
                ->on('bill_states')
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
        Schema::dropIfExists('bills');
    }
}
