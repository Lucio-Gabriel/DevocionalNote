@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'p-2.5 md:px-4 border-gray-300 focus:border-primary focus:primary rounded-md shadow-sm']) }}>
