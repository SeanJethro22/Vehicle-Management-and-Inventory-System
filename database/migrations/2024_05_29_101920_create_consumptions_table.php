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
            $table->integer('km_start');
            $table->integer('km_end');
            $table->integer('dist_trav');
            $table->integer('bal_start');
            $table->integer('bal_end');
            $table->integer('fuel_cons');
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
