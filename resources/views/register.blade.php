<x-layout title="Register">
    <div class="flex items-center h-screen">
        <form action="/register" method="POST" class="card m-auto w-screen md:w-1/3 md:bg-base-200">

            <div class="card-body">
                <h1 class="card-title">Register</h1>
                @csrf

                @error('attempt')
                    <x-error>{{ $message }}</x-error>
                @enderror

                <label for="name" class="label">Name</label>
                <input value="{{ old('name') }}"class="input input-bordered" required type="text" name="name">
                @error('name')
                    <x-error>{{ $message }}</x-error>
                @enderror

                <label for="email" class="label">Email</label>
                <input value="{{ old('email') }}"class="input input-bordered" required type="email" name="email">
                @error('email')
                    <x-error>{{ $message }}</x-error>
                @enderror

                <label for="password" class="label">Password</label><input class="input input-bordered" required
                    type="password" name="password">
                @error('password')
                    <x-error>{{ $message }}</x-error>
                @enderror

                <label for="password_confirmation" class="label">Password Confirm</label>
                <input class="input input-bordered" required type="password" name="password_confirmation">

                <div class="card-actions justify-center mt-2">
                    <button class="btn btn-primary flex-grow" type="submit">Register</button>
                    <x-googleauth />
                </div>
                <span>Already registered? <a class="link" href="/login">Login.</a></span>
            </div>
        </form>
    </div>
</x-layout>
