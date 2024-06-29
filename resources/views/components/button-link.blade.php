@props([
    'color' => 'default',
])
@php
    $class = match ($color) {
        'primary' => 'bg-indigo-600 text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
        default => 'text-gray-900 outline-2 ',
    }
@endphp

<div>
    <a {{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-semibold shadow-sm ' . $class]) }}>
        {{ $slot }}
    </a>
</div>
