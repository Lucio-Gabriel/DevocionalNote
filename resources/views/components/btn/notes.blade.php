<a href="{{ route('dashboard.notes') }}"
   class="flex items-center gap-2 bg-primary text-white font-medium px-32 py-3 rounded-md shadow-md hover:bg-primary-accent duration-300"
>
    {{ $slot }}
    <x-svg.notes
        class="w-5 h-5"
    />
</a>
