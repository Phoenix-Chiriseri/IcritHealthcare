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
        Schema::create('seizure_reports', function (Blueprint $table) {
            $table->id();
            $table->string('ref_number');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('user_id');
            $table->string('location');
            $table->date('date_of_incident');
            $table->time('time_of_incident');
            $table->json('change_of_mood');
            $table->json('restlessness');
            $table->json('sensations');
            $table->json('sound');
            $table->json('other');
            $table->json('standing');
            $table->json('sitting');
            $table->json('in_bed');
            $table->json('unobserved_seizure');
            $table->string('did_fall');
            $table->string('initials_of_harm');
            $table->string('incident_description');
            $table->string('any_causes_to_incident');
            $table->json('any_other_forms');
            $table->string('did_stiffen');
            $table->string('did_not_stiffen');
            $table->string('loss_of_consciousness');
            $table->string('no_loss_of_consciousness');
            $table->string('colour_change');
            $table->string('no_colour_change');
            $table->string('movement');
            $table->string('no_movement');
            $table->string('breathing_difficulty');
            $table->string('no_breathing_difficulty');
            $table->json('left_body_parts');
            $table->json('right_body_parts');
            $table->json('both_body_parts');
            $table->json('arms_body_parts');
            $table->json('legs_body_parts');
            $table->json('picking_body_parts');
            $table->json('eyelid_body_parts');
            $table->json('spasmodic_body_parts');
            $table->json('facial_body_parts');
            $table->json('eyes_body_parts');
            $table->json('stiffening_arms_body_parts');
            $table->json('stiffening_legs_body_parts');
            $table->json('spasmodic_legs_body_parts');
            $table->json('blank_stare_body_parts');
            $table->json('tremors_body_parts');
            $table->json('other_body_parts');
            $table->string('how_long_seizure');
            $table->string('yes_incontinence');
            $table->string('no_incontinence');
            $table->json('condition_after_seizure');
            $table->string('recovery_date');
            $table->string('person_injury');
            $table->string('treatment');
            $table->json('triggers');
            $table->string('reported_by');
            $table->string('report_date');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Fixed foreign 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seizure_reports');
    }
};
