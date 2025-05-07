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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); // Primary key: id
            $table->unsignedBigInteger('idclient'); // Foreign key for client
            $table->unsignedBigInteger('idartist'); // Foreign key for artist
            $table->enum('etat',['','canceled','refused','accepted','In progress','done'])->default('')->nullable(); // Reservation status (e.g., In progress)
            $table->dateTime('dateresrv'); // Reservation date and time
            $table->text('note')->nullable(); // Notes, optional

            // Foreign key relationships
            $table->foreign('idclient')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idartist')->references('id')->on('artists')->onDelete('cascade');
            
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
