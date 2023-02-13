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
        Schema::create('service_sales', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('sale_id');
            $table->uuid('service_id');
            $table->decimal('unit_value', 8, 2);
            $table->integer('quantity');
            $table->decimal('total_value', 8, 2);
            $table->dateTime('date');
            $table->dateTime('payment_date')->nullable();
            $table->timestamps();

            $table->foreign('sale_id')->references('id')->on('sales');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }


    public function down()
    {
        Schema::dropIfExists('service_sales');
    }
};
