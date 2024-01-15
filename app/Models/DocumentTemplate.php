<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentTemplate extends Model
{
    use HasFactory, SoftDeletes;

    public function documentTemplateApprovals()
    {
        return $this->hasMany(DocumentTemplateApproval::class, 'document_template_id', 'id');
    }
}
