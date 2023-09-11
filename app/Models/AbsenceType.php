<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenceType extends Model
{
    use HasFactory;
    protected $fillable = ['AbsenceReason', 'RequiresDocument','Description'];


    public function absence()
    {
        return $this->hasOne(Absence::class);
    }
}
