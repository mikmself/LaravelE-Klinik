<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('medic_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('patien_id')->constrained('patiens')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date_of_checking');
            $table->string('diagnoses');
            $table->string('prescription_medicine');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('medic_records');
    }
};
