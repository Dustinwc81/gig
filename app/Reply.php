<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $gaurded = [];

    protected $fillable = ['body', 'user_id'];

    protected function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
