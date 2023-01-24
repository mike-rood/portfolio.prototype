<aside>
    @auth()
    @if(Auth()->user()->role=='admin')
        <x-admin.menu/>
    @endif
    @endauth
</aside>
