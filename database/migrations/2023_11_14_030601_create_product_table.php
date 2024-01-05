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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('img');
            $table->text('left_content')->default('')->nullable();
            $table->text('right_content')->default('')->nullable();
            $table->timestamps();
        });

        
        Schema::create('products_content_gallery', function (Blueprint $table) {
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('type');
            $table->string('img');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('products_content_gallery');
    }
};
