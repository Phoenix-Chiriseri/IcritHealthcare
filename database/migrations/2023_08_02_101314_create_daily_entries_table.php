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
        Schema::create('daily_entries', function (Blueprint $table) {
            $table->id();
            $table->date('assessment_date');
            $table->string('staff_name');
            $table->string("patient_name");
            $table->string('nhs_number');
            $table->string('user_name_first');
            $table->string('user_name_last');
            $table->string('address_street');
            $table->string('address_line_2')->nullable();
            $table->string('address_city');
            $table->string('address_state');
            $table->string('address_zip');
            $table->string('address_country');
            $table->string('phone');
            $table->string('communication_language');
            $table->string("house");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_entries');
    }
};
