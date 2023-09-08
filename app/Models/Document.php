<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'Documents';



    use HasFactory;
    protected $fillable = [
        'FileURL',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function leaves()
    {
        return $this->hasOne(Leaves::class);
    }
    public function documentTypes()
    {
        return $this->belongsTo(DocumentTypes::class, 'documentType_id');
    }


}

