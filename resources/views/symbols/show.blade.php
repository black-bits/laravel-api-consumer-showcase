@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header pt-4"><h1 class="h3">Symbols Show</h1></div>

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>symbol</th>
                        <th>name</th>
                        <th>date</th>
                        <th>is_enabled</th>
                        <th>type</th>
                        <th>iex_id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($symbols as $symbol)
                        <tr>
                            <td>{{ $symbol->symbol }}</td>
                            <td>{{ $symbol->name }}</td>
                            <td>{{ $symbol->date }}</td>
                            <td>{{ $symbol->is_enabled }}</td>
                            <td>{{ $symbol->type }}</td>
                            <td>{{ $symbol->iex_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
