<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('avatar');
            $table->string('name');
            $table->string('username');
            $table->string('paternal_lastname');
            $table->string('maternal_lastname');
            $table->string('email', 100); //MySQL
            $table->char('phone', 14)->nullable();
            $table->char('curp', 18)->nullable();
            $table->date('birthdate')->nullable();
            $table->char('sex', 1)->nullable();
            $table->unsignedInteger('birthplace_id')->nullable();
            $table->string('professional_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('dependency_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
