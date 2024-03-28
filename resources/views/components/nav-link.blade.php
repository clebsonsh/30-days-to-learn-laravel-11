@php
    $classes =
        request()->url() === $attributes['href']
            ? 'bg-gray-900 text-white'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes . ' block rounded-md px-3 py-2 text-base font-medium']) }}>
    {{ $slot }}
</a>
