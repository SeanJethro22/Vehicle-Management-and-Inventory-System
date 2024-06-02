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
            $table->string('timeDate');
            $table->string('patientName');
            $table->string('patientGender');
            $table->string('patientContact');
            $table->string('patientAddress');
            $table->string('destination');
            $table->string('condition');
            $table->string('reqStatus');
            $table->foreignId('vehicles_id')->cosntrained('vehicles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('drivers_id')->cosntrained('drivers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('responders_id')->cosntrained('responders')->onUpdate('cascade')->onDelete('cascade');
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
