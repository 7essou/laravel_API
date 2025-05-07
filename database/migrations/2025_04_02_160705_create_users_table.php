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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); 
            $table->string('Last_name'); 
            $table->string('phone'); 
            $table->string('email')->unique(); 
            $table->string('password'); 
            $table->string('paymentMethod')->nullable();
            $table->string('paypal')->nullable();
            $table->string('nameOnCard')->nullable(); 
            $table->string('cardNumber')->nullable(); 
            $table->string('expiryDate')->nullable(); 
            $table->string('country')->nullable(); 
            $table->string('cvv')->nullable(); 
            $table->string('zip')->nullable(); 
            $table->boolean('billingSame')->default(false); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
