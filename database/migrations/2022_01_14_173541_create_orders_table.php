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
            $table->id();
            $table->string('order_no');
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->references('id')->on('stores');
            $table->unsignedBigInteger('payment_method_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->unsignedBigInteger('user_address_id');
            $table->foreign('user_address_id')->references('id')->on('user_addresses');
            $table->string('voucher_code')->nullable();
            $table->string('voucher_discount')->nullable();
            $table->double('tax')->nullable();
            $table->double('sub_total')->nullable();
            $table->double('total')->nullable();
            $table->double('schedule_date')->nullable();
            $table->string('order_type')->nullable();
            $table->string('nonce')->nullable();
            $table->string('card_type')->nullable();
            $table->string('status')->default('pending');
            $table->string('is_paid')->nullable();
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
