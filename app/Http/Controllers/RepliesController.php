<?php

namespace App\Http\Controllers;

use App\Like;
use Auth;
use Session;

class RepliesController extends Controller
{
    // FOR LIKE
    public function like($id)
    {

        $userid = Auth::user()->id;

        Like::create([

            'user_id' => $userid,
            'reply_id' => $id,
        ]);
        return redirect()->back();
        Session::flash('success', 'You Liked Reply!');
    }

    // FOR DISLIKING THE REPLY
    public function dislike($id)
    {
        $like = Like::where('reply_id', $id)->where('user_id', Auth::id())->first();

        $like->delete();
        return redirect()->back();
        Session::flash('success', 'You Unliked Reply!');
    }
}