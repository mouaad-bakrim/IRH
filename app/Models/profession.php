<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profession extends Model
{

    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'salare',
        'Requirements',
        'department_id',
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
