@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header pt-4"><h1 class="h3">List Posts</h1></div>

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>body</th>
                    <th>comments</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
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
                            <td>
                                <a href="{{ route('comments.list', ['post' => $post->id]) }}">Comments</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
