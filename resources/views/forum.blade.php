@extends('layouts.app') 
@section('content') @foreach ($discussions as $d)

<div class="card">
    <div class="card-header">
        <img src="{{ $d->user->avatar }}" alt="img" width="40px" height="40px">&nbsp;&nbsp;&nbsp;
        <span>{{ $d->user->name }}</span>, <b>{{ $d->created_at->diffForHumans() }}</b>
        <a class="float-right btn btn-primary" href="{{ route('discussion', ['slug' =>$d->slug]) }}">View</a>
    </div>

    <div class="card-body">
        <h4>{{ $d->title }}</h4>
        <p>{{ str_limit($d->content,200) }}</p>
    </div>
    <div class="card-footer">
        {{ $d->replies->count() }} Replies
    </div>
</div>
<br> @endforeach
<div class="tex-center">
    {{ $discussions->links() }}
</div>
@endsection