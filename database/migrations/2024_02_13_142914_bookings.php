<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('organiser_id')->nullable();
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('ticket_id');
            $table->unsignedBigInteger('quantity');
            $table->decimal('price', 10, 2)->unsigned();
            $table->decimal('tax', 10, 2)->nullable();
            $table->decimal('net_price', 10, 2)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->string('event_title', 256);
            $table->date('event_start_date')->nullable();
            $table->date('event_end_date')->nullable();
            $table->time('event_start_time')->nullable();
            $table->time('event_end_time')->nullable();
            $table->unsignedBigInteger('event_repetitive')->default(0);
            $table->string('ticket_title', 256);
            $table->decimal('ticket_price', 10, 2)->unsigned();
            $table->string('event_category', 256);
            $table->tinyInteger('booking_cancel')->default(0)->index();
            $table->timestamp('booking_cancel_date')->nullable();
            $table->string('item_sku', 255)->default(0);
            $table->unsignedBigInteger('order_number')->default(0);
            $table->unsignedBigInteger('transaction_id')->default(0);
            $table->string('customer_name', 256);
            $table->string('customer_tc', 255)->nullable();
            $table->string('customer_phone', 255)->nullable();
            $table->string('customer_email', 256);
            $table->string('currency', 5)->nullable();
            $table->tinyInteger('checked_in')->default(0);
            $table->string('payment_type', 256)->default('online');
            $table->tinyInteger('is_paid')->default(1);
            $table->tinyInteger('is_bulk')->default(0);
            $table->unsignedBigInteger('promocode_id')->nullable();
            $table->string('promocode', 64)->nullable();
            $table->unsignedBigInteger('pos_id')->nullable();
            $table->string('bulk_code', 255)->nullable();
            $table->unsignedBigInteger('scanner_id')->nullable();
            $table->string('common_order', 255)->nullable();
            $table->string('promocode_reward', 255)->default(0);
            $table->tinyInteger('review_mail')->default(0);
            $table->string('service', 300)->default(0);
            $table->tinyInteger('children_count')->default(0);
            $table->tinyInteger('student')->nullable();
            $table->tinyInteger('is_guest')->default(0);
        });
    }

     /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }

   

};
