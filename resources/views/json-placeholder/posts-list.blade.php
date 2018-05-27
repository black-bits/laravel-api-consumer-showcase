@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header pt-4"><h1 class="h3">Posts List</h1></div>

        <div class="card-body">
            @php dump($posts); @endphp
        </div>
    </div>

@endsection
