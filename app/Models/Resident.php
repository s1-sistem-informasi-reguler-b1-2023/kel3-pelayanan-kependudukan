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
    
    public function Territory()
    {
        return $this->hasOne(Territory::class,'desa_id');
    }
}
