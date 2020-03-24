@extends('layouts.app') 
@section('content')

<div class="card">
    <div class="card-header">Edit Channel: {{ $channel->title }}</div>

    <div class="card-body">
        <form action="{{ route('channel.update', ['channel' => $channel->id]) }}" method="POST">
            {{ csrf_field() }} {{ method_field('PUT') }}
            <div class="form-group"><input type="text" name="channel" class="form-control" value="{{ $channel->title }}"></div>
            <div class="form-group">
                <div class="text-center"><button type="submit" class="btn btn-success">Save Channel</button></div>
            </div>
        </form>
    </div>
</div>
@endsection