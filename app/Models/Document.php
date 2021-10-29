<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'overtime';

    protected $fillable = [
        'name',
        'document',
        'activities_type',
        'qty_hours',
        'status'
    ];
}