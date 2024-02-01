<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('practice_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors')->onUpdate('cascade')->onDelete('cascade');
            $table->date('day');
            $table->string('hour');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('practice_schedules');
    }
};
