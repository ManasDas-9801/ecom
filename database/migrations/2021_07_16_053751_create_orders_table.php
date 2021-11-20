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
            $table->increments('order_id')->unique();
            $table->Integer('product_id');
            $table->Integer('user_id');
            $table->boolean("isInOrder")->default(true);
            $table->string('user_address');
            $table->string('user_pin');
            $table->Integer('product_quantity');
            $table->integer('product_price');
            $table->date('deleivery_date');
            $table->Integer('payment')->default('0');
            $table->string('phone_number');

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
