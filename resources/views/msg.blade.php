<div id="msgs">
    <li class="list-disc {{ $msg->user->id == auth()->user()->id ? 'uppercase bg-lime-700' : '' }}">{{ $msg->content }} -
        {{ $msg->user->name }}</li>
</div>