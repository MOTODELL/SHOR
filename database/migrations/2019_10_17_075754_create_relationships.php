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

        Schema::table('municipalities', function (Blueprint $table) {
            $table->foreign('state_id')->references('id')->on('states');
        });

        Schema::table('localities', function (Blueprint $table) {
            $table->foreign('municipality_id')->references('id')->on('municipalities');
        });

        Schema::table('doctors', function (Blueprint $table) {
            $table->foreign('address_id')->references('id')->on('addresses');
        });

        Schema::table('ssns', function (Blueprint $table) {
            $table->foreign('ssn_type_id')->references('id')->on('ssn_types');
        });

        Schema::table('role_user', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('cause_date', function (Blueprint $table) {
            $table->foreign('cause_id')->references('id')->on('causes');
            $table->foreign('date_id')->references('id')->on('dates');
        });

        Schema::table('service_date', function (Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('date_id')->references('id')->on('dates');
        });
        
        Schema::table('patients', function (Blueprint $table) {
            $table->foreign('ssn_id')->references('id')->on('ssns');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('birthplace_id')->references('id')->on('states');
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('viality_id')->references('id')->on('vialities');
            $table->foreign('locality_id')->references('id')->on('localities');
            $table->foreign('municipality_id')->references('id')->on('municipalities');
        });

        Schema::table('dates', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cause_id')->references('id')->on('causes');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('observations', function (Blueprint $table) {
            $table->dropForeign(['date_id']);
        });
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['dependency_id']);
        });

        Schema::table('municipalities', function (Blueprint $table) {
            $table->dropForeign(['state_id']);
        });

        Schema::table('localities', function (Blueprint $table) {
            $table->dropForeign(['municipality_id']);
        });

        Schema::table('doctors', function (Blueprint $table) {
            $table->dropForeign(['address_id']);
        });

        Schema::table('ssns', function (Blueprint $table) {
            $table->dropForeign(['ssn_type_id']);
        });

        Schema::table('role_user', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::table('cause_date', function (Blueprint $table) {
            $table->dropForeign(['cause_id']);
            $table->dropForeign(['date_id']);
        });

        Schema::table('service_date', function (Blueprint $table) {
            $table->dropForeign(['service_id']);
            $table->dropForeign(['date_id']);
        });
        
        Schema::table('patients', function (Blueprint $table) {
            $table->dropForeign(['ssn_id']);
            $table->dropForeign(['address_id']);
            $table->dropForeign(['birthplace_id']);
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign(['state_id']);
            $table->dropForeign(['viality_id']);
            $table->dropForeign(['locality_id']);
            $table->dropForeign(['municipality_id']);
        });

        Schema::table('dates', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['cause_id']);
            $table->dropForeign(['status_id']);
            $table->dropForeign(['doctor_id']);
            $table->dropForeign(['patient_id']);
            $table->dropForeign(['service_id']);
        });
    }
}
