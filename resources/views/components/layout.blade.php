<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head/>
    <body class="flex flex-col">
        <x-header/>
        <section class="flex flex-row">
        <x-aside/>
        {{ $slot }}
        </section>
        <script src="https://kit.fontawesome.com/c42221788b.js" crossorigin="anonymous"></script>
    </body>
</html>
