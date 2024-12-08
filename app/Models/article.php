<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\category;

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

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    // protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
