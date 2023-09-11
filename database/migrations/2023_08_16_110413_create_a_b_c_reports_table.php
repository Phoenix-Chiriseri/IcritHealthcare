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
            $table->string('initialsOfPerson');
            $table->time('start_time');
            $table->unsignedBigInteger('user_id');
            $table->time('end_time');
            $table->text('influencing_factors');
            $table->text('what_happened_before_incident');
            $table->json('behaviors')->nullable(); // Store behaviors as JSON
            $table->text('what_happened_after_incident');
            $table->text('immediateActions');
            $table->text('done_differently');
            $table->enum('proact_scip_interventions', ['Yes', 'No']);
            $table->enum('medication_administered', ['Yes', 'No']);
            $table->enum('physical_contact_injury_intimidation', ['Yes', 'No']);
            $table->foreign('user_id')->references('id')->on('users'); // Adjust the table name as needed
            $table->timestamps();
            
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
