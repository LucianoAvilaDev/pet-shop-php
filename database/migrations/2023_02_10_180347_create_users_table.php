<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->uuid('role_id');
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->date('birth_date');
            $table->string('address');
            $table->string('city_state');
            $table->string('zip');
            $table->string('phone');
            $table->string('photo')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles');

        });
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
};
