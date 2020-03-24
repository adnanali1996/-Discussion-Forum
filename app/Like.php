<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $fillable = ['user_id', 'reply_id'];

    // REPLY HAS MANY LIKES AND ONE LIKE ONLY BELONG TO ONE REPLY
    public function reply()
    {
        return $this->belongsTo('App\Reply');
    }

    // USER MAY HAVE MANY LIKES AND ONE LIKE ONLY BELONG TO ONE USER
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}