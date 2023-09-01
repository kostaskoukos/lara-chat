<x-layout title="Login">

    <form action="/login" method="POST" class="card max-w-md h-1/3 m-auto">
        <div class="card-body">
            <h1 class="card-title">Login</h1>
            @csrf
            <label for="email" class="label">Email</label> <input class="input input-bordered" required type="email" name="email">
            <label for="password" class="label">Password</label> <input class="input input-bordered" required type="password" name="password">
            <div class="flex items-center gap-3"><label for="remember" class="label">Remember</label> <input class="toggle toggle-primary inline-flex" type="checkbox" name="remember"></div>
            <div class="card-actions justify-center">
                <button class="btn btn-primary flex-grow" type="submit">Login</button>
                <x-googleauth />
            </div>
        </div>
    </form>
</x-layout>