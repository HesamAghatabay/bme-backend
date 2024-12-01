<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable = [
        'title',
        'image',
        'intro',
        'resources',
        'writer',
        'date',
        'body',
        'user_id',
        'category_id',
    ];

    // protected $guarded = [];
}
