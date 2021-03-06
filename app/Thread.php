<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded = [];

    protected $fillable =['title', 'body', 'user_id', 'slug'];


    public function path() {
        return "/forum/{$this->slug}";
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

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    public function getRouteKeyName() {

        return 'slug';

    }
}
