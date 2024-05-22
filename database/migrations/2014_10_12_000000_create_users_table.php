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
            $table->string('image')->nullable();
            $table->string('desc')->nullable();
            $table->string('num')->nullable();
            $table->string('insta')->nullable();
            $table->string('fb')->nullable();
            $table->enum('gender',['Male','Female','Other'])->nullable();
            $table->string('age')->nullable();
            $table->enum('type',['Admin','Client'])->default('Client');
            $table->boolean('verified')->default(0);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
