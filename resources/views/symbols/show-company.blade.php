@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header pt-4"><h1 class="h3">Symbols Show Company</h1></div>

        <div class="card-body">
            <h2 class="h3">Symbol</h2>

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
                    <tr>
                        <td>{{ $symbol->symbol }}</td>
                        <td>{{ $symbol->name }}</td>
                        <td>{{ $symbol->date }}</td>
                        <td>{{ $symbol->is_enabled }}</td>
                        <td>{{ $symbol->type }}</td>
                        <td>{{ $symbol->iex_id }}</td>
                    </tr>
                </tbody>
            </table>

            <h2 class="h3">Company</h2>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>company_name</th>
                        <th>exchange</th>
                        <th>industry</th>
                        <th>website</th>
                        <th>description</th>
                        <th>ceo</th>
                        <th>issue_type</th>
                        <th>sector</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $company->company_name }}</td>
                        <td>{{ $company->exchange }}</td>
                        <td>{{ $company->industry }}</td>
                        <td>{{ $company->website }}</td>
                        <td>{{ $company->description }}</td>
                        <td>{{ $company->ceo }}</td>
                        <td>{{ $company->issue_type }}</td>
                        <td>{{ $company->sector }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

