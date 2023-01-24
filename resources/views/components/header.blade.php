<header class="flex flex-row">
    <div><a href="{{ route('portfolio.index') }}">Main page</a></div>
    @if (Route::has('login'))
    <div>
        @auth
            <div class="flex flex-row">
                <a href="{{ url('/home') }}">Home</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Logout">
                </form>
            </div>
        @else
        <a href="{{ route('login') }}">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif
</header>
