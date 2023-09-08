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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name')->nullable();
            $table->string('prenom')->nullable();
            $table->string('cin')->nullable();
            $table->string('email')->unique();
            $table->boolean('isAdmin')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable();
            $table->string('status')->nullable();
            $table->string('contrat')->nullable();
            $table->string('SalaireNet')->nullable();
            $table->string('SalaireBrut')->nullable();
            $table->string('PeriodeDeStage')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('DateDeNaissance')->nullable();
            $table->string('Telephone')->nullable();
            $table->string('EmailProfessionnel')->nullable();
            $table->string('Nationalite')->nullable();
            $table->string('Ville')->nullable();
            $table->string('SituationFamiliale')->nullable();
            $table->string('NombreDenfants')->nullable();
            $table->string('NombreDenfantsACharge')->nullable();
            $table->string('CarteDeSejour')->nullable();
            $table->string('NumeroDePasseport')->nullable();
            $table->string('DateDexpiration')->nullable();
            $table->string('DateDembauche')->nullable();
            $table->string('dateDeConfirmation')->nullable();
            $table->unsignedBigInteger('profession_id')->nullable();
            $table->foreign('profession_id')->references('id')->on('professions'); $table->unsignedBigInteger('profession_id')->nullable();
            $table->unsignedBigInteger('CompanyDetails_id')->nullable();
            $table->foreign('CompanyDetails_id')->references('id')->on('CompanyDetails');
            $table->string('upload')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
