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
        Schema::create('consumptions', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('destination');
            $table->string('purpose');
            $table->float('km_start');
            $table->float('km_end');
            $table->string('td1');
            $table->string('ta1');
            $table->string('td2');
            $table->string('ta2'); 
            $table->decimal('dist_trav', 8, 2)->default(0.00);           
            $table->float('bal_start');
            $table->float('issued')->nullable();
            $table->float('added');
            $table->float('total');
            $table->float('fuel_cons');
            $table->decimal('bal_end', 8, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumptions');
    }
};
