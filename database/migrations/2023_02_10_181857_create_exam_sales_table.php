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
        Schema::create('exam_sales', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('exam_id')->index()->foreign()->references('id')->on('exams');
            $table->uuid('sale_id')->index()->foreign()->references('id')->on('sales');
            $table->uuid('animal_id')->index()->foreign()->references('id')->on('animals');
            $table->uuid('veterinarian_id')->index()->foreign()->references('id')->on('veterinarians');
            $table->dateTime('request_date');
            $table->dateTime('expected_arrival_date');
            $table->dateTime('arrival_date')->nullable();
            $table->decimal('total_value', 8, 4);
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
        Schema::dropIfExists('exam_requests');
    }
};
