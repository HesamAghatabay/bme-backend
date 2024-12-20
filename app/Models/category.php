<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'image',
        'info',
        'userip',
        'user_id',
    ];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
