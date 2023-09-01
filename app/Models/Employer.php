<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'prenom',
        'cin',
        'email',
        'contrat',
        'status',
        'password',
        'role',
        'profession_id',
        'SalaireNet',
        'SalaireBrut',
        'PeriodeDeStage',
        'Adresse',
        'DateDeNaissance',
        'Telephone',
        'EmailProfessionnel',
        'Nationalite',
        'Ville',
        'DateDexpiration',
        'SituationFamiliale',
        'NombreDenfants',
        'NombreDenfantsACharge',
        'CarteDeSejour',
        'NumeroDePasseport',
        'DateDembauche',
        'dateDeConfirmation',
        'upload',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}

