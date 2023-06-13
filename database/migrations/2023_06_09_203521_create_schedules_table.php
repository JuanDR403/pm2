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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('subjects_id');
            $table->string('dias');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->timestamps();
            
            $table->foreign('instructor_id')->references('id')->on('instructors'); 
            $table->foreign('materia_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};