<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class comment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'body',
        'user_id',
        'article_id',
        'userip'
    ];
    public function article()
    {
        return $this->belongsTo(article::class);
    }
}
