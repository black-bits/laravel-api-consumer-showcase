@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header pt-4"><h1 class="h3">Show all Symbols</h1></div>

        <div class="card-body">
            <form id="search-form" action="{{ route('symbols.list') }}" method="get">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>symbol</th>
                        <th>name</th>
                        <th>date</th>
                        <th>is_enabled</th>
                        <th>type</th>
                        <th>iex_id</th>
                        <th>company</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="text" name="symbol" class="form-control" placeholder="symbol search" value="{{ Request::get('symbol') }}" /></td>
                        <td><input type="text" name="name" class="form-control" placeholder="company name search" value="{{ Request::get('name') }}" /></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @foreach($symbols as $symbol)
                        <tr>
                            <td>{{ $symbol->symbol }}</td>
                            <td>{{ $symbol->name }}</td>
                            <td>{{ $symbol->date }}</td>
                            <td>{{ $symbol->is_enabled }}</td>
                            <td>{{ $symbol->type }}</td>
                            <td>{{ $symbol->iex_id }}</td>
                            <td><a href="{{ route('symbols.show.company', ['apiSymbol' => $symbol->symbol]) }}">company</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>

@endsection

@section('js')
    @parent
    <script>
        $(window).keypress(function (e) {
            if (e.which === 13) {
                $('#search-form').submit();
                return false;    //<---- Add this line
            }
        });
    </script>

@endsection