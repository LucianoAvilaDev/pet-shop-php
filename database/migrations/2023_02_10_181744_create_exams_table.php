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
            $table->uuid('laboratory_id')->index()->foreign()->references('id')->on('laboratories');
            $table->uuid('veterinarian_id')->index()->foreign()->references('id')->on('veterinarians');
            $table->string('name');
            $table->mediumText('description');
            $table->integer('conclusion_days');
            $table->decimal('value', 8, 4);
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
        Schema::dropIfExists('exams');
    }
};
