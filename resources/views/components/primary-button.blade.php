<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center justify-center gap-2 bg-primary text-white font-medium px-40 md:px-52 py-3 rounded-md shadow-md hover:bg-primary-accent duration-300']) }}>
    {{ $slot }}
</button>
