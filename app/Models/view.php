<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class view extends Model
{
    public function article()
    {
        return $this->belongsToMany(article::class);
    }
}
