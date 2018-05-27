<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @section('css')
        @include('partials.css')
    @show

</head>
<body>
<div id="app">

    @include('partials.navigation-top')

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-3">
                    @include('partials.navigation-left')
                </div>

                <div class="col-md-9">

                    @yield('content')

                </div>
            </div>
        </div>
    </main>
</div>

@section('js')
    @include('partials.js')
@show

</body>
</html>
