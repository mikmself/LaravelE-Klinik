<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('patien_id')->constrained('patiens')->onUpdate('cascade')->onDelete('cascade');
            $table->date('registration_date');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
