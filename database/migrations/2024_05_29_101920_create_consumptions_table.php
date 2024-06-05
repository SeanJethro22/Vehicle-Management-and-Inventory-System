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
            $table->string('passenger');
            $table->string('destination');
            $table->string('purpose');
            $table->float('km_start');
            $table->float('km_end');
            $table->float('dist_trav');
            $table->float('bal_start');
            $table->float('bal_end');
            $table->float('fuel_cons');
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
