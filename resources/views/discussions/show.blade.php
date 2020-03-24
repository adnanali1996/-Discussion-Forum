@extends('layouts.app') 
@section('content')

<div class="card">
    <div class="card-header">
        <img src="{{ $d->user->avatar }}" alt="img" width="40px" height="40px">&nbsp;&nbsp;&nbsp;
        <span>{{ $d->user->name }}</span>, <b>{{ $d->created_at->diffForHumans() }}</b>
    </div>

    <div class="card-body">
        <h4>{{ $d->title }}</h4>
        <p>{{ $d->content }}</p>
    </div>
    <div class="card-footer">
        {{ $d->replies->count() }} Replies
    </div>
</div>
<br> @foreach ($d->replies as $r)
<div class="card">
    <div class="card-header">
        <img src="{{ $r->user->avatar }}" alt="img" width="40px" height="40px">&nbsp;&nbsp;&nbsp;
        <span>{{ $r->user->name }}</span>, <b>{{ $r->created_at->diffForHumans() }}</b>

    </div>

    <div class="card-body">
        <p>{{ $r->content }}</p>
    </div>
    <div class="card-footer">
        @if($r->is_liked_by_auth_user()) <a href="{{ route('reply.dislike', ['id' => $r->id]) }}" class="btn btn-danger btn-xs">Unlike <span class="badge">{{ $r->likes->count() }}</span></a> @else
        <a href="{{ route('reply.like', ['id' => $r->id]) }}" class="btn btn-success btn-xs"> Like <span class="badge">{{ $r->likes->count() }}</span> </a> @endif
    </div>
</div>
@endforeach
<br><br> {{-- COMMENTS --}}
<div class="card">
    <div class="card-header">
        Comments
    </div>
    <div class="card-body">
        <form action="{{ route('discussion.reply', ['id'=> $d->id]) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="float-right btn btn-success">Leave Reply</button>
            </div>
        </form>
    </div>

</div>
@endsection