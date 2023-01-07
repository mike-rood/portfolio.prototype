<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-layouts.head/>
    <body>
        <x-layouts.header/>
        {{ $slot }}
    </body>
</html>