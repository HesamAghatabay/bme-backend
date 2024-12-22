<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class confirm extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'userIp',
        'date',
        'user_id',
        'article_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function article()
    {
        return $this->belongsTo(article::class);
    }
}
