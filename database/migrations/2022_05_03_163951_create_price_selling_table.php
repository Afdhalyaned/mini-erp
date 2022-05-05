<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceSellingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_selling', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->string('margin_category');
            $table->bigInteger('margin_value');
            $table->bigInteger('selling_price');
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
        Schema::dropIfExists('price_selling');
    }
}
