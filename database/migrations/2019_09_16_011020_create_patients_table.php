<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('relationship');
            $table->string('name');
            $table->string('lastname');
            $table->string('curp');
            $table->date('birthdate');
            $table->char('sex');
            $table->string('phone');
            $table->string('street');
            $table->string('colony');
            $table->string('number');
            $table->string('zip_code');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('birthplace');
            $table->unsignedBigInteger('ssn_id');
            $table->unsignedBigInteger('titular');
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
        Schema::dropIfExists('patients');
    }
}
