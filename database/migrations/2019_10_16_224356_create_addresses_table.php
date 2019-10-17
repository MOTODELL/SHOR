<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('street')->nullable();
            $table->string('numbre_ext')->nullable();
            $table->string('numbre_int')->nullable();
            $table->string('colony')->nullable();
            $table->string('zip_code')->nullable();
            $table->unsignedInteger('viality_id')->nullable();
            $table->unsignedInteger('locality_id')->nullable();
            $table->unsignedInteger('municipality_id')->nullable();
            $table->unsignedInteger('state_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
