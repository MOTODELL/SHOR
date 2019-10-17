<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ssns', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedInteger('ssn_type_id');
            $table->string('ssn');
            $table->integer('number');
            $table->string('kinship');
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
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
        Schema::dropIfExists('ssns');
    }
}
