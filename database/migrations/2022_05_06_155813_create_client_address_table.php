<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_address', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id');
            $table->string('name');
            $table->text('detail')->nullable();
            $table->string('province')->nullable();
            $table->string('distric')->nullable();
            $table->string('urban_village')->nullable();
            $table->string('village')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('map_url')->nullable();
            $table->boolean('is_deleted');
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
        Schema::dropIfExists('client_address');
    }
}
