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
            $table->uuid('client_id')->index()->foreign()->references('id')->on('clients');
            $table->uuid('user_id')->index()->foreign()->references('id')->on('users');
            $table->dateTime('date');
            $table->decimal('total_value', 8, 4);
            $table->dateTime('payment_date')->nullable();
            $table->decimal('paid_value', 8, 4)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
