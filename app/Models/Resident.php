<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resident extends Model
{
    use HasFactory, SoftDeletes;

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function desa()
    {
        return $this->hasOne(Territory::class, 'id', 'desa_id');
    }
    public function kecamatan()
    {
        return $this->hasOne(Territory::class, 'id', 'kecamatan_id');
    }
    public function kabupaten()
    {
        return $this->hasOne(Territory::class, 'id', 'kabupaten_id');
    }
    public function provinsi()
    {
        return $this->hasOne(Territory::class, 'id', 'provinsi_id');
    }
}