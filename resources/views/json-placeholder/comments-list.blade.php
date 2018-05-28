@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header pt-4"><h1 class="h3">List Comments</h1></div>

        <div class="card-body">

            <h2>Post</h2>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>body</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $post->id }}
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ $post->body }}
                        </td>
                    </tr>
                </tbody>
            </table>

            <h2 class="mt-5">Comments</h2>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>email</th>
                        <th>body</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->body }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
