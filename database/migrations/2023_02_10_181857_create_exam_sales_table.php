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
            $table->uuid('exam_id');
            $table->uuid('sale_id');
            $table->uuid('animal_id');
            $table->uuid('veterinarian_id');
            $table->dateTime('request_date');
            $table->dateTime('expected_arrival_date');
            $table->dateTime('arrival_date')->nullable();
            $table->decimal('total_value', 8, 4);
            $table->dateTime('payment_date')->nullable();
            $table->timestamps();

            $table->foreign('exam_id')->references('id')->on('exams');
            $table->foreign('sale_id')->references('id')->on('sales');
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->foreign('veterinarian_id')->references('id')->on('veterinarians');
        });
    }


    public function down()
    {
        Schema::dropIfExists('exam_sales');
    }
};
