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
        Schema::create('appointment_sales', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('sale_id')->index()->foreign()->references('id')->on('sales');
            $table->uuid('animal_id')->index()->foreign()->references('id')->on('animals');
            $table->uuid('veterinarian_id')->index()->foreign()->references('id')->on('veterinarians');
            $table->decimal('unit_value', 8, 2);
            $table->integer('quantity');
            $table->decimal('total_value', 8, 2);
            $table->dateTime('payment_date')->nullable();
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
        Schema::dropIfExists('appointment_sales');
    }
};
