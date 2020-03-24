<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $fillable = ['user_id', 'discussion_id', 'content'];

    // EACH DISCUSISON MANY HAVE MANY REPLIES BUT REPLIES HAVE ONE DISCUSSION
    public function discussion()
    {
        return $this->belongsTo('App\Discussion');
    }

    // EACH USER MAY REPLY MANY TIMES
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // REPLY HAS MANY LIKES
    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    // CHECK THE FUNCTION IF THE AUTHENTICATED USER LIKE THE PARTICULAR POST OR NOT
    public function is_liked_by_auth_user()
    {
        $id = Auth::id();
        $likers = array();
        foreach ($this->likes as $like) {
            array_push($likers, $like->user_id);
        }
        if (in_array($id, $likers)) {
            return true;
        } else {
            return false;
        }
    }
}