<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'study',
        'photo',
        'info',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
