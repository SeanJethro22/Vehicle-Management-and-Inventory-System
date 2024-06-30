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
            $table->string('mvfileNo');
            $table->string('plateNumber')->nullable();
            $table->string('engineNumber');
            $table->string('chassisNumber');
            $table->string('demonition');  
            $table->string('pistonDisplacement');
            $table->string('cylinders');
            $table->string('fuel');
            $table->string('make');
            $table->string('series');
            $table->string('bodyType');
            $table->string('yearModel', 4);
            $table->string('color');
            $table->string('grossWt');   
            $table->string('netWt');  
            $table->string('shippingWt');   
            $table->string('netCap');    
            $table->string('purchasedDate');
            $table->string('registrationDate');
            $table->string('orNo');
            $table->string('purchasedCost');
            $table->string('depreciationCost')->nullable();
            $table->string('propertyNumber');

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
