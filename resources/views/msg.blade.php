<div id="msgs">
    <x-message :mine="$msg->user->id == auth()->user()->id" :name="$msg->user->name">
        {{ $msg->content }}
    </x-message>
</div>