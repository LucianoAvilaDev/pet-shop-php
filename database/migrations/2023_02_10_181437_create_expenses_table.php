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
        Schema::create('expenses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->index()->foreign()->references('id')->on('users')->delete('cascade');
            $table->string('description');
            $table->mediumText('observations')->nullable();
            $table->decimal('total_value', 8, 2);
            $table->decimal('paid_value', 8, 2)->nullable();
            $table->dateTime('payment_date_time')->nullable();
            $table->dateTime('deadline_date_time')->nullable();
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
        Schema::dropIfExists('expenses');
    }
};
