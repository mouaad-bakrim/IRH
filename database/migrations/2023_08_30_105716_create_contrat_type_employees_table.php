<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateContratTypeEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contrat_type_employees', function (Blueprint $table) {
            $table->id();
            $table->string('contrat_type')->nullable();
            $table->timestamps();
        });

        DB::table('contrat_type_employees')->insert([
            ['contrat_type' => 'CDI'],
            ['contrat_type' => 'CDD'],
            ['contrat_type' => 'CDT'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrat_type_employees');
    }
};

