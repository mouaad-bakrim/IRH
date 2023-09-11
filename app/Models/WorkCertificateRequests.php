<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkCertificateRequests extends Model
{
    use HasFactory;
    protected $fillable = ['Status', 'ActionDate','RequestDate'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
