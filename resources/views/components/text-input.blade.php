@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'ps-10 p-2.5 md:px-12 border-gray-300 focus:border-primary focus:primary rounded-md shadow-sm']) }}>
