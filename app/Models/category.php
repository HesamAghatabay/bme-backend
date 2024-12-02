<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'title',
        'image',
        'info',
    ];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
