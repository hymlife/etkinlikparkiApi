<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title', 64);
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->string('description', 512)->nullable();
            $table->unsignedBigInteger('event_id');
            $table->timestamps();
            $table->tinyInteger('status')->default(1);
            $table->integer('customer_limit')->nullable();
            $table->tinyInteger('t_soldout')->default(0);
            $table->timestamp('sale_start_date')->nullable();
            $table->timestamp('sale_end_date')->nullable();
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->tinyInteger('is_donation')->default(0);
            $table->decimal('studentPrice', 10, 2);
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->tinyInteger('isStudentPrice')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
