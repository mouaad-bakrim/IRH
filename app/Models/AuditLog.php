<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    use HasFactory;
    protected $fillable = ['ActionType', 'EntityAffected','ActionDescription','Date','user_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
