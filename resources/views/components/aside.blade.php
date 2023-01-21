<aside>
@if(Auth()->user()->role=='admin')
    <x-admin.menu/>
@endif
</aside>
