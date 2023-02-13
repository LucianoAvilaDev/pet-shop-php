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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('unit_of_measurement_id');
            $table->string('code');
            $table->string('name');
            $table->mediumText('description');
            $table->decimal('sale_price', 8, 2);
            $table->json('images');
            $table->decimal('stock_quantity', 8, 4);
            $table->decimal('storage_quantity', 8, 4);
            $table->timestamps();

            $table->foreign('unit_of_measurement_id')->references('id')->on('unit_of_measurements');
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
};
