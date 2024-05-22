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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('desc');
            $table->string('num');
            $table->string('fb');
            $table->string('insta');
            $table->enum('location',['Rabat','Casablanca','Essaouira','Agadir','Marrakesh','Oujda','Dakhla','Al Hoceima','Tangier','Ifrane']);
            $table->string('price');
            $table->date('date');
            $table->string('typeDetails')->nullable();
            $table->boolean('looking_for')->default(0);
            $table->boolean('displaying')->default(0);
            $table->enum('type',['Sport','Art','Party','Wedding','Birthday','Music','Worshop or Class','Conference','Trip','Guided tour']);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
