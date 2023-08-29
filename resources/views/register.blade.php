<x-layout title="Register">
    <form action="/register" method="POST">
        @csrf
        Name<input required type="text" name="name">
        Email<input required type="email" name="email">
        Password<input required type="password" name="password">
        Password Confirm<input required type="password" name="password_confirmation">
        <button type="submit">Register</button>
        <x-googleauth />
    </form>
</x-layout>
