<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->integer('order_status_lookup_id')->unsigned();

            $table->integer('order_id')->unsigned();
            $table->integer('book_id')->unsigned();
            $table->float('quantity')->unsigned();

            $table->float('gross_price')->nullable();
            $table->integer('discount_id')->nullable();
            $table->float('discount_amount')->nullable();
            $table->float('net_price')->nullable();

            $table->float('deliver_quantity')->nullable();
            $table->string('deliver_date')->nullable();
            $table->text('deliver_notes')->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
