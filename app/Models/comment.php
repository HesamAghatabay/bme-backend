<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        'name',
        'body',
        'user_id',
        'article_id'
    ];
    public function article()
    {
        return $this->belongsTo(article::class);
    }
    
}
