<x-layouts.app>
<h1>Register</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div><input type="text" name="name" placeholder="Name"></div>
        <div><input type="email" name="email" placeholder="Email"></div>
        <div><input type="password" name="password" placeholder="Password"></div>
        <div><input type="submit" value="Register"></div>
    </form>
</x-layouts.app>
