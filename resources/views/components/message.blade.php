@props(['mine' => false, 'name' => ''])
<li class="chat {{ $mine ? 'chat-end' : 'chat-start' }}">
    <span class="chat-header mx-2">{{ $name }}</span>
    <p class="chat-bubble {{ $mine ? 'chat-bubble-primary' : 'chat-bubble-secondary' }}">{{ $slot }}</p>
</li>
