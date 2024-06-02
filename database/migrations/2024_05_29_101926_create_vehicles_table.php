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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicleName');
            $table->string('plateNumber')->unique();   
            $table->string('make');
            $table->string('series');
            $table->string('model');
            $table->string('bodyType');
            $table->string('yearModel');
            $table->string('engineNumber')->unique();
            $table->string('chassisNumber')->unique();
            $table->string('purchaseDate');
            $table->string('registrationDate');
            $table->string('purchaseCost');
            $table->string('depreciationCost');
            $table->string('propertyNumber')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
