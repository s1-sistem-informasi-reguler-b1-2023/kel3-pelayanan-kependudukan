<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'fileable_id',
        'fileable_type',
        'nama_file',
        'mime_file',
        'ukuran_file',
        'file_path',
        'jenis_file',
    ];
}
