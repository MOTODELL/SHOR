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
            $table->string('folio');
            $table->date('attention_date');
            $table->text('diagnosis');
            $table->string('service');
            $table->string('identifier');
            $table->date('date_start');
            $table->date('date_end');
            $table->integer('duration_days');
            $table->string('unit_price');
            $table->string('extra_cost');
            $table->string('amount');
            $table->string('status');
            $table->unsignedBigInteger('cause_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('consulting_room_id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('patient_id');
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
