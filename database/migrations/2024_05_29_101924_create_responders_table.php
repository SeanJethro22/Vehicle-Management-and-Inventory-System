<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('responders', function (Blueprint $table) {
            $table->id();
            $table->string('responderFN');
            $table->string('responderMN')->nullable();
            $table->string('responderLN'); 
            $table->string('suffix');  
            $table->string('dob');
            $table->string('age', 2);
            $table->string('gender');
            $table->string('civilStatus');
            $table->string('mobileNumber', 11);
            $table->string('email');  
            $table->string('ca_street')->nullable();
            $table->string('ca_purok');
            $table->string('ca_brgy');
            $table->string('ca_cmun');
            $table->string('ca_province');
            $table->string('ca_zipcode', 4);
            $table->string('employeeId');
            $table->string('designation');
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
        Schema::dropIfExists('responders');
    }
};
