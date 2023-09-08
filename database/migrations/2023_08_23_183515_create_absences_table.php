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
        Schema::create('absences', function (Blueprint $table) {
            $table->id('Absence_id');
            $table->date('StartDate');
            $table->date('EndDate');
            $table->string('AbsenceStatus');
            $table->unsignedBigInteger('absenceTypes_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('absenceTypes_id')->references('id')->on('absenceTypes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absences');
    }
};
