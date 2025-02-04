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
        Schema::create('entertainment_replies', function (Blueprint $table) {
            $table->id();
            $table->string('reply');
            $table->unsignedBigInteger('comment_id')->nullable();
            $table->foreign('comment_id')
            ->references('id')
            ->on('entertainment_comments')
            ->onDelete('restrict')
            ->onUpdate('restrict');
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
        Schema::dropIfExists('entertainment_replies');
    }
};
