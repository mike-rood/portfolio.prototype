<x-layout>
<h1>Register</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div><input type="text" name="name" placeholder="Name"></div>
        @error('name')
        <div>{{ $message }}</div>
        @enderror
        <div><input type="email" name="email" placeholder="Email"></div>
        @error('email')
        <div>{{ $message }}</div>
        @enderror
        <div><input type="password" name="password" placeholder="Password"></div>
        @error('password')
        <div>{{ $message }}</div>
        @enderror
        <div><input type="password" name="password_confirmation" placeholder="Repeat password"></div>
        <div><input type="submit" value="Register"></div>
    </form>
</x-layout>
