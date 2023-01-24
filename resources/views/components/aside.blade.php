<aside class="flex flex-col border border-black border-solid rounded">
    @auth()
    @if(Auth()->user()->role=='admin')
        <x-admin.menu/>
    @endif
    @endauth
</aside>
