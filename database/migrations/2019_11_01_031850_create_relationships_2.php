<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationships2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->foreign('zip_code_id')->references('id')->on('zip_codes');
        });

        Schema::table('zip_codes', function (Blueprint $table) {
            $table->foreign('municipality_id')->references('id')->on('municipalities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign(['zip_code_id']);
        });

        Schema::table('zip_codes', function (Blueprint $table) {
            $table->dropForeign(['municipality_id']);
        });
    }
}
