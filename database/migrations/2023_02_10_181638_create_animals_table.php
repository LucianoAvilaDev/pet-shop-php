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
        Schema::create('animals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('client_id')->index()->foreign()->references('id')->on('clients');
            $table->string('name');
            $table->string('species');
            $table->string('breed');
            $table->string('coat');
            $table->integer('age');
            $table->decimal('weight', 4, 4);
            $table->string('size');
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('animals');
    }
};
