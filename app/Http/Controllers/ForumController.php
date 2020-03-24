<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Discussion;

class ForumController extends Controller
{
    //
    public function index()
    {
        return view('forum', ['discussions' => Discussion::orderBy('created_at', 'DESC')->paginate(2)]);
    }

    // SHOWING THE DISSCUSSION OF THE PARTICULAR CHANNEL
    public function channel_forum($slug)
    {
        $channel = Channel::where('slug', $slug)->first();
        // return view('channel_forum', ['discussions' => $channel->discussions]);
        return view('channel_forum')->with('discussions', $channel->discussions()->paginate(5));
    }
}
