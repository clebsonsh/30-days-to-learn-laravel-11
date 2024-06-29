@props([
    'color' => 'default',
])
@php
    $class = match ($color) {
        'primary' => 'bg-indigo-600 text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
        'danger' => 'bg-red-600 text-white hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600',
        default => 'text-gray-900 outline-2 ',
    }
@endphp

<div>
    <button {{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-semibold shadow-sm ' . $class]) }}>
        {{ $slot }}
    </button>
</div>
