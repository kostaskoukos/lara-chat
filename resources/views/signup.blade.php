<x-layout title="Sign Up">
    <button class="btn btn-info" x-jsz x-data="{ count: 1 }" :class="count % 2 == 0 ? 'btn-square' : 'btn-circle'"
        @@click="count++">@{{ count }}</button>
</x-layout>
