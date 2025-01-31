<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

    protected $fillable = [
        'technology_name',
        'category',
        'description',
        'implemented_by',
        'implemented_since',
        'location',
        'benefits',
        'challenges',
    ];
}
