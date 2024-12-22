<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role_user extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected $guarded = [];
}
