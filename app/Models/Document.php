<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'dokumen_template_id',
        'justifikasi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dokumenTemplate()
    {
        return $this->belongsTo(DocumentTemplate::class);
    }
}
