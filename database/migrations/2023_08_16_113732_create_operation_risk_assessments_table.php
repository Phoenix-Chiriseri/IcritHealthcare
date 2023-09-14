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
        Schema::create('operation_risk_assessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('user_id');
            $table->date('assessment_date');
            $table->string('accessors_email_1'); // Adjusted field name
            $table->string('accessors_email_2'); // Adjusted field name
            $table->unsignedBigInteger('patient_id');
            $table->text('what_causes_harm');
            $table->text('where_is_the_hazard');
            $table->text('who_might_be_harmed');
            $table->text('how_will_they_be_harmed');
            $table->text('how_often_are_exposed_hazard');
            $table->text('how_long_exposed_hazard');
            $table->string('disallowing_activity');
            $table->text('comment');
            $table->string('likelihood_harm');
            $table->string('how_serious_harm');
            $table->text('list_of_control_measures');
            $table->date('date_when_control_measures_implemented');
            $table->text('identity_training_required_risk');
            $table->date('identity_training_was_specified');
            $table->text('identity_equipment_reduced_risk');
            $table->date('date_equipment_provided');
            $table->string('likelihood_radio_harm');
            $table->string('how_serious_harm_radio');
            $table->text('additional_control_measures');
            $table->date('completion_control_measures');
            $table->text('risk_assessment_drawn_by');
            $table->date('risk_assessment_date');
            $table->string('assessment_taken_mental');
            $table->text('please_comment_any_behaviours');
            $table->string('positive_liberty_issue');
            $table->string('outcome_best_interest_radio');
            $table->text('comment');
            $table->date('date_of_review');
            $table->text('changes_required');
            $table->text('managers_name');
            $table->text('risk_assessment_Activity_accessed');
            $table->date('date_of_assessment');
            $table->text('signage_name');
            $table->date('signage_date');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation_risk_assessments');
    }
};
