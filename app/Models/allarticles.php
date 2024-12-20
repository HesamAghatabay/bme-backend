<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class allarticles extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'image',
        'intro',
        'resources',
        'writer',
        'date',
        'activity',
        'body',
        'user_id',
        'userip',
    ];
}
