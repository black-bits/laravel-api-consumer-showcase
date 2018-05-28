<div class="navigation-left">
    <ul class="list-unstyled bg-white border px-3 rounded">

        <li class="d-block mt-4 mb-1 px-2"><h5>Show Case <br/>IEX</h5></li>
        <li><a class="{{ Route::currentRouteName() == 'symbols.list'         ? 'active' : '' }} d-block py-1 pl-3 pr-2 my-1" href="{{ route('symbols.list')                 }}">Show All Symbols</a></li>
        <li><a class="{{ Route::currentRouteName() == 'symbols.show.company' ? 'active' : '' }} d-block py-1 pl-3 pr-2 my-1" href="{{ route('symbols.show.company', 'AAPL') }}">Show Company For Symbol</a></li>

        <li class="d-block mt-4 mb-1 px-2"><h5>Show Case <br/>JSONPlaceholder</h5></li>
        <li><a class="{{ Route::currentRouteName() == 'users.list'    ? 'active' : '' }} d-block py-1 pl-3 pr-2 my-1" href="{{ route('users.list')    }}">List Users</a></li>
        <li><a class="{{ Route::currentRouteName() == 'posts.list'    ? 'active' : '' }} d-block py-1 pl-3 pr-2 my-1" href="{{ route('posts.list')    }}">List Posts</a></li>
        <li><a class="{{ Route::currentRouteName() == 'comments.list' ? 'active' : '' }} d-block py-1 pl-3 pr-2 my-1" href="{{ route('comments.list', ['post' => 1]) }}">List Comments</a></li>

    </ul>
</div>