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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('slug', 128)->index(); // Index ekledik
            $table->timestamps();
            $table->tinyInteger('status')->default(0); // Default değeri ekledik
            $table->string('thumb', 512)->nullable(); // Nullable ekledik
            $table->string('image', 512)->nullable(); // Nullable ekledik
            $table->tinyInteger('template')->default(1); // Default değeri ekledik
            $table->unsignedBigInteger('category_id')->nullable();
            // Diğer sütunları ekleyebilirsiniz.

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
