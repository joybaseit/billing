<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string('order_no');
            $table->string('style_no');
            $table->string('design_no');
            $table->integer('stich');
            $table->string('product_name');
            $table->string('colour_name');
            $table->string('unit_name');
            $table->integer('quantity');
            $table->integer('unit_price');
            $table->integer('total');
            $table->double('total_usd',15,2);
            $table->timestamps();
            $table->foreignId('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billings');
    }
}
