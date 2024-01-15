<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role;

class DocumentTemplateApproval extends Model
{
    use HasFactory, SoftDeletes;

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }
}
