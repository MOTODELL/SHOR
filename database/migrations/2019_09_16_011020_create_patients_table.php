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
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('paternal_lastname');
            $table->string('maternal_lastname');
            $table->string('curp');
            $table->date('birthdate');
            $table->unsignedInteger('birthplace_id');
            $table->char('sex', 1);
            $table->uuid('ssn_id');
            $table->unsignedInteger('address_id');
            $table->string('phone');
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
