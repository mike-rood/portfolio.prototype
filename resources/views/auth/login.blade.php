<x-layout>
<h1>Login</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div><input type="email" name="email" placeholder="Enter your email"></div>
        @error('email')
        <div>{{ $message }}</div>
        @enderror
        <div><input type="password" name="password" placeholder="Enter your password"></div>
        @error('password')
        <div>{{ $message }}</div>
        @enderror
        <div><input type="submit" value="Login!"></div>
    </form>
</x-layout>
