<x-layout title="Login">
    <form action="/login" method="POST">
        @csrf
        Email <input required type="email" name="email">
        Password <input required type="password" name="password">
        Remember <input type="checkbox" name="remember">
        <button type="submit">Login</button>
    </form>
</x-layout>
