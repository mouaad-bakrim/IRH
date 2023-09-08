<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'cin' => ['string', 'max:255'],
            'Adresse' => ['string', 'max:255'],
            'contrat' => ['string', 'max:255'],
            'SalaireNet' => ['string', 'max:255'],
            'SalaireBrut' => ['string', 'max:255'],
            'PeriodeDeStage' => ['string', 'max:255'],
            'DateDeNaissance' => ['string', 'max:255'],
            'Telephone' => ['string', 'max:255'],
            'EmailProfessionnel' => ['string', 'max:255'],
            'Nationalite' => ['string', 'max:255'],
            'Ville' => ['string', 'max:255'],
            'DateDexpiration' => ['string', 'max:255'],
            'SituationFamiliale' => ['string', 'max:255'],
            'NombreDenfants' => ['string', 'max:255'],
            'NombreDenfantsACharge' => ['string', 'max:255'],
            'CarteDeSejour' => ['string', 'max:255'],
            'NumeroDePasseport' => ['string', 'max:255'],
            'DateDembauche' => ['string', 'max:255'],
            'dateDeConfirmation' => ['string', 'max:255'],
            'upload' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'status' => ['integer', Rule::in([-1, 0])],
        ];

    }
    }
