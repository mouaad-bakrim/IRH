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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('Nom')->nullable();
            $table->string('Prenom')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('DateDeNaissance')->nullable();
            $table->string('Telephone')->nullable();
            $table->string('EmailProfessionnel')->nullable();
            $table->string('EmailPersonnel')->nullable();
            $table->string('Nationalite')->nullable();
            $table->string('Ville')->nullable();
            $table->string('Cin')->nullable();
            $table->string('SituationFamiliale')->nullable();
            $table->string('NombreDenfants')->nullable();
            $table->string('NombreDenfantsACharge')->nullable();
            $table->string('CarteDeSejour')->nullable();
            $table->string('NumeroDePasseport')->nullable();
            $table->string('DateDexpiration')->nullable();
            $table->string('Profession')->nullable();
            $table->string('SalaireNet')->nullable();
            $table->string('SalaireBrut')->nullable();
            $table->string('TypeDeContrat')->nullable();
            $table->string('DateDembauche')->nullable();
            $table->string('PeriodeDeStage')->nullable();
            $table->string('dateDeConfirmation')->nullable();
            $table->string('upload')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
