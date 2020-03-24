@extends('layouts.app') 
@section('content')

<div class="card">
    <div class="card-header text-center">Create Channel</div>

    <div class="card-body">
        <form action="{{ route('discussion.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="channel">Pick A Channel</label>
                <select name="channel_id" id="channel_id" class="form-control">
                    @foreach ($channels as $channel)
                        <option value="{{ $channel->id }}">{{ $channel->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">Ask Question</label>
                <textarea name="content" id="content" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary pull-right ">Create Discussion</button>
            </div>
        </form>
    </div>
</div>
@endsection