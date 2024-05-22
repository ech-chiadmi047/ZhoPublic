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
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->string('Sport')->default(0);
            $table->string('Art')->default(0);
            $table->string('Party')->default(0);
            $table->string('Wedding')->default(0);
            $table->string('Birthday')->default(0);
            $table->string('Music')->default(0);
            $table->string('Worshop or Class')->default(0);
            $table->string('Conference')->default(0);
            $table->string('Trip')->default(0);
            $table->string('Guided tour')->default(0);
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
        Schema::dropIfExists('preferences');
    }
};
