<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nom', 'description','type','plase','user_id'];

    public function profession()
    {
        return $this->hasMany(Profession::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

}
