<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('products_id');
            $table->string('price');
            $table->string('qty');
            $table->string('total_bdt')->nullable();
            $table->string('total_usd')->nullable();
            $table->foreignId('billings_id');

            $table->foreign('billings_id')->references('id')->on('billings')->onDelete('cascade');
            $table->foreign('products_id')->references('id')->on('Products')->onDelete('cascade');
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
        Schema::dropIfExists('order_products');
    }
}
