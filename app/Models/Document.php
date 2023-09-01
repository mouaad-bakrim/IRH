<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'Documents';



    use HasFactory;
    protected $fillable = [
        'nom',
    ];
}

