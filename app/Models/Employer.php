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
     'Nom',
     'Prenom',
     'Adresse',
     'DateDeNaissance',
     'Telephone',
     'EmailProfessionnel',
     'EmailPersonnel',
     'Nationalite',
     'Ville',
     'Cin',
     'DateDexpiration',
     'SituationFamiliale',
     'NombreDenfants',
     'NombreDenfantsACharge',
     'CarteDeSejour',
     'NumeroDePasseport',
     'Profession',
     'SalaireNet',
     'SalaireBrut',
     'TypeDeContrat',
     'DateDembauche',
     'PeriodeDeStage',
     'dateDeConfirmation',
     'upload',
 ];



}

