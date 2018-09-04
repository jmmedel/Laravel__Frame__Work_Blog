@extends('layouts.admin')


@section('title') Admin User @endsection

@section('content')

<div class="content">
        <div class="card">
                <div class="card-header bg-light">
                    Admin UserView
                </div>
        
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Post</th>
                                <th>Comment</th>
                                <th>Created at </th>
                                <th>updated at </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td class="text-nowrap">{{ $user->name }}</td>
                                <td>{{ $comment->content }}</td>
                                <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</td>
                                <td>
                                    <form id="deleteComment-{{ $comment->id }}" action="{{ route('admindeleteComment',$comment->id) }}" method="POST">@csrf</form>
                                    <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteComment-{{ $comment->id }}').submit()">X</button>
                                </td>
                            </tr>
                           
                            @endforeach
                           
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
</div>


@endsection

