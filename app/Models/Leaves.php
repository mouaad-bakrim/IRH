<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaves extends Model
{
    use HasFactory;
    protected $fillable = ['Status', 'StartDate','EndDate'];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
    public function leaveTypes()
    {
        return $this->belongsTo(LeaveTypes::class, 'leavetype_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
