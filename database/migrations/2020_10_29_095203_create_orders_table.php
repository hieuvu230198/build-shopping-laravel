<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('customer_id');
            $table->string('order_code',255)->unique();
            $table->string('tracking_no',256)->nullable();
            $table->unsignedInteger('deliver_id');
            $table->unsignedInteger('payment_id');
            $table->text('comment')->nullable();
            $table->dateTime('ship_date')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->dateTime('is_deleted')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
