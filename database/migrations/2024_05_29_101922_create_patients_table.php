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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('requestDate');
            $table->string('travelDate');
            $table->string('travelTime');
            $table->string('patientName');
            $table->string('patientGender');
            $table->string('patientAge');
            $table->string('patientContact', 11);
            $table->string('patientAddress');
            $table->string('destination');
            $table->string('diagnoses');
            $table->string('reqStatus');
            
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
