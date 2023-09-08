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
        Schema::create('employee_trainings', function (Blueprint $table) {
            $table->id();
            $table->string('TrainingName')->nullable();
            $table->date('StartDate')->nullable(); // Utilisez le type "date" pour la date de début
            $table->date('EndDate')->nullable();   // Utilisez le type "date" pour la date de fin
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_trainigs');
    }
};
