<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    //
    protected $fillable = ['title', 'content', 'user_id', 'channel_id', 'slug'];
    // DISCUSSION MAY HAVE MANY DICSUSSIONS BUT EACH DISCUSSION BELONGS TO ONE CHANNEL
    public function channel()
    {
        return $this->belongsTo('App\Channel');
    }

    // EACH DISCUSSION MAY HAVE MANY REPLIES
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    // EACH USER MAY HAVE MANY DISSCUSSION BUT EACH DISCUSSION IS BELONGS TO ONE USER

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}