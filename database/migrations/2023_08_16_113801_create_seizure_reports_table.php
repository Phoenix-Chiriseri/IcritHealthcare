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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('patient_id');
            $table->string('location');
            $table->date('date_of_incident');
            $table->time('time_of_incident');
            $table->json('other_forms_1')->nullable();
            $table->json('other_forms_2')->nullable();
            $table->string('did_fall');
            $table->string('initials_of_harm');
            $table->text('incident_description');
            $table->text('any_causes_to_incident');
            $table->json('any_other_forms')->nullable();
            $table->string('did_stiffen');
            $table->string('loss_of_consciousness');
            $table->string('colour_change');
            $table->string('movement');
            $table->string('breathing_difficulty');
            $table->json('parts')->nullable();
            $table->string('how_long_seizure');
            $table->string('yes_incontinence');
            $table->json('condition_after_seizure')->nullable();
            $table->string('recovery_date');
            $table->string('person_injury');
            $table->text('treatment');
            $table->json('triggers')->nullable();
            $table->string('reported_by');
            $table->date('report_date');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
