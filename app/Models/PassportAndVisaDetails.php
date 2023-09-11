<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassportAndVisaDetails extends Model
{
    use HasFactory;
    protected $fillable = ['PassportNumber', 'ExpiryDate','VisaType','VisaCountry','VisaExpiryDate'];

}
