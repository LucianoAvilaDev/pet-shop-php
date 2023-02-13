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
        Schema::create('veterinarians', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('crmv');
            $table->string('address');
            $table->string('city_state');
            $table->string('zip');
            $table->string('phone');
            $table->decimal('appointment_value', 6, 2);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('veterinarians');
    }
};
