<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('professional_id');
            $table->string('phone');
            $table->string('street');
            $table->string('colony');
            $table->string('number');
            $table->string('zip_code');
            $table->date('vacation_start');
            $table->date('vacation_end');
            $table->unsignedBigInteger('consulting_room_id');
            $table->unsignedBigInteger('state_id');
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
        Schema::dropIfExists('doctors');
    }
}
