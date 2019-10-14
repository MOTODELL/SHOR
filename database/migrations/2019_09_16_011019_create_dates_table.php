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
            $table->text('diagnosis')->nullable();
            $table->string('service')->nullable();
            $table->string('identifier')->nullable();
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->integer('duration_days')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('extra_cost')->nullable();
            $table->string('amount')->nullable();
            $table->unsignedBigInteger('cause_id')->nullable();
            $table->uuid('user_id');
            $table->unsignedBigInteger('consulting_room_id')->nullable();
            $table->uuid('doctor_id')->nullable();
            $table->uuid('patient_id');
            $table->unsignedBigInteger('status_id');
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
