<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'judul',
        'konten',
        'tanggal_publish',
        'tanggal_berakhir',
    ];
}
