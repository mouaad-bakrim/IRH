<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;


    protected $fillable = [
        'StartDate',
        'EndDate',
        'AbsenceStatus',
        'absenceType-id',
        'user_id'

    ];
    protected $primaryKey = 'Absence_id';


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    } public function absenceTypes()
    {
        return $this->belongsTo(AbsenceType::class, 'absenceTypes_id','id');
    }
}
