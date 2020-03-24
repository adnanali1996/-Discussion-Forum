@extends('layouts.app') 
@section('content')

<div class="card">
    <div class="card-header">Channels</div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>Channel</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($channels as $channel)
                <tr>
                    <td>{{ $channel->title }}</td>
                    <td> <a href="{{ route('channel.edit', ['channel' => $channel->id]) }}" class="btn btn-xs btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('channel.destroy', ['channel'=> $channel->id]) }}" method="POST">
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection