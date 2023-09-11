<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveTypes extends Model
{
    use HasFactory;
    protected $fillable = ['LeaveName', 'NumberOfDays','RequiresDocument','Description'];



    public function leaves()
    {
        return $this->hasOne(Leaves::class);
    }
}
