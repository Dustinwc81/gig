<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];

    // Need this to make the fields assignable, if not here, error thrown
    protected $fillable = ['body', 'user_id'];

    protected function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
