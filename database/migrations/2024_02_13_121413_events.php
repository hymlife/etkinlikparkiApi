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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title', 256)->nullable();
            $table->text('description')->nullable();
            $table->text('faq')->nullable();
            $table->string('thumbnail2', 256)->nullable();
            $table->string('thumbnail', 256)->nullable();
            $table->string('poster', 256)->nullable();
            $table->text('images')->nullable();
            $table->text('video_link')->nullable();
            $table->string('venue', 256)->nullable();
            $table->string('address', 512)->nullable();
            $table->string('city', 256)->nullable();
            $table->string('state', 256)->nullable();
            $table->string('zipcode', 64)->nullable();
            $table->integer('country_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->tinyInteger('repetitive')->nullable()->default(0);
            $table->tinyInteger('featured')->nullable()->default(0);
            $table->tinyInteger('status')->nullable()->default(1);
            $table->string('meta_title', 256)->nullable();
            $table->string('meta_keywords', 512)->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->tinyInteger('add_to_facebook')->nullable();
            $table->timestamps();
            $table->string('slug', 512)->nullable();
            $table->tinyInteger('price_type')->nullable()->default(0);
            $table->string('latitude', 256)->nullable();
            $table->string('longitude', 256)->nullable();
            $table->bigInteger('item_sku')->unsigned()->nullable()->default(0);
            $table->tinyInteger('publish')->nullable()->default(0);
            $table->string('is_publishable', 512)->nullable();
            // Diğer sütunları da ekleyebilirsiniz.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
