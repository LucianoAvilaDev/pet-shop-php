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
        Schema::create('exams', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('laboratory_id');
            $table->uuid('veterinarian_id');
            $table->string('name');
            $table->mediumText('description');
            $table->integer('conclusion_days');
            $table->decimal('value', 8, 4);
            $table->timestamps();

            $table->foreign('laboratory_id')->references('id')->on('laboratories');
            $table->foreign('veterinarian_id')->references('id')->on('veterinarians');
        });
    }


    public function down()
    {
        Schema::dropIfExists('exams');
    }
};
