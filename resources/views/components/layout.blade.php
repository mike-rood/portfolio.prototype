<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head/>
    <body>
        <x-header/>
        {{ $slot }}
    </body>
</html>
