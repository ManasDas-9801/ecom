<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('p_id')->unique();
            $table->string('p_name');
            $table->string('p_brand');
            $table->string('p_imageone');
            $table->string('p_imagetwo');
            $table->string('p_imagethree');
            $table->string('p_description');
            $table->Integer('p_type');
            $table->Integer('p_price');
            $table->Integer('p_quantity');
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
        Schema::dropIfExists('products');
    }
}
