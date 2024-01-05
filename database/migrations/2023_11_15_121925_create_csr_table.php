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
        Schema::create('csr', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->string('headline_img');
            $table->text('content');
            $table->boolean('isPublish')->default(0);
            $table->timestamps();
        });

        Schema::create('csr_content_gallery', function (Blueprint $table) {
            $table->unsignedBigInteger('csr_id');
            $table->foreign('csr_id')->references('id')->on('csr')->onDelete('cascade');
            $table->string('img');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csr');
        Schema::dropIfExists('csr_content_gallery');
    }
};
