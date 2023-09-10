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
        Schema::create('a_b_c_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('user_id');
            $table->string('initials_of_person');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->text('influencing_factors');
            $table->text('what_happened_before_incident');
            $table->json('behaviors'); // Store checkboxes as JSON
            $table->text('actions_taken');
            $table->text('done_differently');
            $table->enum('proact_scip_interventions', ['Yes', 'No']);
            $table->enum('medication_administered', ['Yes', 'No']);
            $table->enum('physical_contact_injury_intimidation', ['Yes', 'No']);
            // Add more columns for other fields as needed
            $table->timestamps();
            // Define foreign key relationship with the patients table
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_b_c_reports');
    }
};
