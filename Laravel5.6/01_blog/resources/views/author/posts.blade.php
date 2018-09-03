@extends('layouts.admin')

@section('title') Author Posts @endsection

@section('content')

<div class="card">
    <div class="card-header bg-light">
        Author Posts
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Created at </th>
                    <th>Updated at </th>
                    <th>Comments </th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach(Auth::user()->comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td class="text-nowrap"><a href="{{ route('singlePost',$comment->id) }}">{{ $comment->post->title }}</a></td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</td>
                    <td>
                        <form id="deleteComment-{{ $comment->id }}" action="{{ route('deleteComment',$comment->id) }}" method="POST">@csrf</form>
                        <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteComment-{{ $comment->id }}').submit()">X</button>
                    </td>
                </tr>
               
                @endforeach
               
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection