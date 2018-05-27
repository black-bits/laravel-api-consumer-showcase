@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header pt-4"><h1 class="h3">Symbols List</h1></div>

        <div class="card-body">
            @php dump($symbols); @endphp
        </div>
    </div>

@endsection
