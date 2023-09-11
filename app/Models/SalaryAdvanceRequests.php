<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryAdvanceRequests extends Model
{
    use HasFactory;
    protected $fillable =
        [
            'RequestAmount',
            'RequestDate',
            'ActionDate',
            'Status',
            'user_id',

        ]
    ;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
