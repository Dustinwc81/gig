<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $gaurded = [];

    public function path() {
        return "/forum/{$this->id}";
    }

    protected function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function addReply($reply)
        {
            $this->replies()->create($reply);
        }
}
