<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
  //  use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'prenom',
        'cin',
        'email',
        'contrat',
        'status',
        'password',
        'role',
        'Profession_id',
        'SalaireNet',
        'SalaireBrut',
        'PeriodeDeStage',
    ];

    public function profession()
    {
        return $this->belongsTo(Profession::class);
    } public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function isAdmin()
    {
        return $this->role === 'admin';

        // Supposons que 'role' soit le champ qui définit le rôle de l'utilisateur.
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
