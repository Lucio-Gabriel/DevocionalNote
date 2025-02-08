<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-48 md:px-[165px] py-2 text-white font-normal bg-primary hover:bg-primary-accent duration-300 rounded-md shadow-lg']) }}>
    {{ $slot }}
</button>
