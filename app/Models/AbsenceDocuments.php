<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenceDocuments extends Model
{
    use HasFactory;
    //protected $fillable = ['AbsenceDocumentID', 'NumberOfDays','RequiresDocument','Description'];
    protected $fillable = ['Absence_id', 'Document_id'];


    public function absence()
    {
        return $this->belongsTo(Absence::class, 'absence_id');
    }
    public function document()
    {
        return $this->belongsTo(Document::class, 'DocumentID', 'DocumentID');
    }
}
