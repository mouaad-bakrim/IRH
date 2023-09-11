<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    use HasFactory;
    protected $fillable = ['CompanyName', 'CompanyAddress','OtherDetails'];


    public function users()
    {
        return $this->hasMany(User::class);
    }
}
