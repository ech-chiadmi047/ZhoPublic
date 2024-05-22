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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('notification');
            $table->string('status')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users') 
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('suggestion_id')->nullable();
            $table->foreign('suggestion_id')
            ->references('id')
            ->on('suggestions')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('place_id')->nullable();
            $table->foreign('place_id')
            ->references('id')
            ->on('places')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('catering_id')->nullable();
            $table->foreign('catering_id')
            ->references('id')
            ->on('caterings')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('entertainment_id')->nullable();
            $table->foreign('entertainment_id')
            ->references('id')
            ->on('entertainments')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->foreign('equipment_id')
            ->references('id')
            ->on('equipment')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')
            ->references('id')
            ->on('companies')
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
        Schema::dropIfExists('notifications');
    }
};
