<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTrainings extends Model
{
    use HasFactory;
    protected $fillable = ['TrainingName', 'StartDate','EndDate','user_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
