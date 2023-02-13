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
        Schema::create('sales', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('client_id');
            $table->uuid('user_id');
            $table->dateTime('date');
            $table->decimal('total_value', 8, 4);
            $table->dateTime('payment_date')->nullable();
            $table->decimal('paid_value', 8, 4)->nullable();
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }


    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
