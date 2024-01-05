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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->string('headline_img');
            $table->text('content');
            $table->boolean('isPublish')->default(0);
            $table->timestamps();
        });

        Schema::create('news_content_gallery', function (Blueprint $table) {
            $table->unsignedBigInteger('news_id');
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->string('img');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_content_gallery');
        Schema::dropIfExists('news');
    }
};
