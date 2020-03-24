<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Reply;
use App\Discussion;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    //
    public function create()
    {
        return view('discuss');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'channel_id' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'channel_id' => $request->channel_id,
            'user_id' => Auth::id(),
            'slug' => str_slug($request->title),
        ];
        $discussion = Discussion::create($data);
        Session::flash('success', 'Discussion Created Successfully!');
        return redirect()->route('discussion', ['slug' => $discussion->slug]);
    }

    // SHOW THE DISCUSSION
    public function show($slug)
    {
        return view('discussions.show')->with('d', Discussion::where('slug', $slug)->first()
        );
    }

    // FUNCTION FOR COMMENT
    public function reply($id)
    {
        $d_id = Discussion::find($id);
        Reply::create([
            'user_id' => Auth::id(),
            'discussion_id' => $id,
            'content' => request()->reply,
        ]);

        Session::flash('sucess', 'Replied To Discussion!');
        return redirect()->back();
    }
}