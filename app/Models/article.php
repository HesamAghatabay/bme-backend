<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class article extends Model
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
        'category_id',
        'userip'
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
    public function views()
    {
        return $this->hasMany(view::class);
    }
    public function comments()
    {
        return $this->hasMany(comment::class);
    }
}
