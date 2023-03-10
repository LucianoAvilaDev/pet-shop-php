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
        Schema::create('purchases', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->mediumText('observations')->nullable();
            $table->dateTime('purchase_date_time');
            $table->decimal('total_value', 8, 2);
            $table->dateTime('payment_date_time')->nullable();
            $table->decimal('paid_value', 8, 2)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->delete('cascade');

        });
    }


    public function down()
    {
        Schema::dropIfExists('purchases');
    }
};
