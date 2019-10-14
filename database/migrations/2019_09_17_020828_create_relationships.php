<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('observations', function (Blueprint $table) {
            $table->foreign('date_id')->references('id')->on('dates');
        });
        
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('dependency_id')->references('id')->on('dependencies');
        });

        Schema::table('doctors', function (Blueprint $table) {
            $table->foreign('consulting_room_id')->references('id')->on('consulting_rooms');
            $table->foreign('state_id')->references('id')->on('states');
        });
        
        Schema::table('patients', function (Blueprint $table) {
            $table->foreign('ssn_id')->references('id')->on('ssns');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('titular')->references('id')->on('patients');
            $table->foreign('birthplace_id')->references('id')->on('states');
        });

        Schema::table('dates', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cause_id')->references('id')->on('causes');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('consulting_room_id')->references('id')->on('consulting_rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['dependency_id']);
        });

        Schema::table('observations', function (Blueprint $table) {
            $table->dropForeign(['date_id']);
        });

        Schema::table('doctors', function (Blueprint $table) {
            $table->dropForeign(['state_id']);
            $table->dropForeign(['consulting_room_id']);
        });
        
        Schema::table('patients', function (Blueprint $table) {
            $table->dropForeign(['ssn_id']);
            $table->dropForeign(['state_id']);
            $table->dropForeign(['titular']);
            $table->dropForeign(['birthplace_id']);
        });

        Schema::table('dates', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['cause_id']);
            $table->dropForeign(['doctor_id']);
            $table->dropForeign(['patient_id']);
            $table->dropForeign(['consulting_room_id']);
        });
    }
}
