@extends('layouts.app') 
@section('content')

<div class="card">
    <div class="card-header">Create</div>

    <div class="card-body">
        <form action="{{ route('channel.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group"><input type="text" name="channel" class="form-control"></div>
            <div class="form-group">
                <div class="text-center"><button type="submit" class="btn btn-success">Save Channel</button></div>
            </div>
        </form>
    </div>
</div>
@endsection