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
        Schema::create('bookingtemp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('event_id')->nullable();
            $table->unsignedBigInteger('seat_id')->nullable();
            $table->unsignedBigInteger('ticket_id')->nullable();
            $table->string('booking_date', 30)->nullable();
            $table->string('booking_time', 30)->nullable();
            $table->index('sessionx')->nullable();;
            $table->index('sessionx1')->nullable();;
            $table->bigInteger('timex')->nullable();
            $table->bigInteger('timeexp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookingtemp');
    }
};
