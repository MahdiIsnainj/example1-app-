<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'name',
        'email',
        'doc_type',
        'notes',
        'file_path',
        'status'
    ];
}

