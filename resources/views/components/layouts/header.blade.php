<header>
    @if (Route::has('login'))
    <div>
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif
</header>