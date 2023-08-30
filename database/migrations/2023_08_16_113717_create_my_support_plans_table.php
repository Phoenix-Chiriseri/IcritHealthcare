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
        Schema::create('my_support_plans', function (Blueprint $table) {
        $table->id();
        $table->date('date');
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('patient_id');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade'); 
        $table->string('shift');
        $table->string('personal_care');
        $table->string('medication_admin');
        $table->string('appointments');
        $table->string('activities');
        $table->string('incident');
        $table->timestamps();  
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('my_support_plans');
    }

};
