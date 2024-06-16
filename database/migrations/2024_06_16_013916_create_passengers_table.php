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
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->string('passengerName');
            $table->string('address');
            $table->string('dob');
            $table->string('age');
            $table->string('gender');
            $table->string('civilStatus');
            $table->string('mobileNumber', 11)->unique();
            $table->string('employeeId')->unique();
            $table->string('position');
            $table->string('status');
            $table->string('division');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
};
