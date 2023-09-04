<x-layout title="Login">
    <div class="flex h-screen items-center">
        <form action="/login" method="POST" class="card m-auto w-screen md:w-1/3 md:bg-base-200">
            <div class="card-body">
                <h1 class="card-title">Login</h1>
                @csrf

                <label for="email" class="label">Email</label>
                <input value="{{ old('email') }}" class="input input-bordered" required type="email" name="email">
                @error('email')
                    <x-error>{{ $message }}</x-error>
                @enderror

                <label for="password" class="label">Password</label>
                <input class="input input-bordered" required type="password" name="password">
                @error('password')
                    <x-error>{{ $message }}</x-error>
                @enderror

                <div class="card-actions justify-center mt-2">
                    <button class="btn btn-primary flex-grow" type="submit">Login</button>
                    <x-googleauth />
                </div>
                @error('attempt')
                    <x-error>{{ $message }}</x-error>
                @enderror
                <span>Don't have an account? <a class="link" href="/register">Make one here.</a></span>
            </div>
        </form>
    </div>
</x-layout>
