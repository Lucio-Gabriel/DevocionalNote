@props(['note'])

<a
    href="{{ route('dashboard.notes.edit', $note) }}"
    wire:navigate
    class="text-2xl font-semibold mt-1 text-primary mr-5"
>
    {{ $slot }}
</a>
