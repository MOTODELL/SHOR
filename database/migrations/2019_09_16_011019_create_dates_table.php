<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->timestamp('attention_date');
            $table->timestamp('date_start')->nullable();
            $table->timestamp('date_end')->nullable();
            $table->text('diagnosis')->nullable();
            $table->unsignedBigInteger('cause_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->float('extra_cost')->nullable();
            $table->float('amount')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->uuid('user_id');
            $table->uuid('patient_id');
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
        Schema::dropIfExists('dates');
    }
}
