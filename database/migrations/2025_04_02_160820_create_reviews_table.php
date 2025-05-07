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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // Primary key: id
            $table->unsignedBigInteger('idArtist'); // Foreign key for artist
            $table->unsignedBigInteger('idClient'); // Foreign key for client
            $table->text('description'); // Review description
            $table->integer('rating'); // Rating (e.g., out of 5)

            // Define foreign key relationships
            $table->foreign('idArtist')->references('id')->on('artists')->onDelete('cascade');
            $table->foreign('idClient')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
