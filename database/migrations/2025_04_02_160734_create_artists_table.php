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
        Schema::create('artists', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade'); 
            $table->string('Nickname'); 
            $table->string('Categorie'); 
            $table->string('city'); 
            $table->string('Profil_img')->nullable(); 
            $table->string('desc_img')->nullable(); 
            $table->string('Adresse'); 
            $table->text('about'); 
            $table->text('Service_desc'); 
            $table->decimal('prix', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
