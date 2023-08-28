<x-layout title="Live Chat">
    @auth
        Your username is {{ auth()->user()->name }}
    @endauth
    <form action="/" method="post">
        @csrf
        <input required type="text" name="content">
        <button type="submit">Send</button>
    </form>
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-warning inline">Logout</button>
    </form>
</x-layout>
