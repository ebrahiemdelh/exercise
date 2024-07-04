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
        Schema::create('product_image_link', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products', 'id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('image_id')->constrained('prod_images', 'id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_image_link');
    }
};
