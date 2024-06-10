@props([
    'name',
    'label',
    'placeholder',
    'type' => 'text'
])

<div class="sm:col-span-4">
    <label for="{{ $name }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $label }}</label>
    <div class="mt-2">
        <div
            class="rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <input {{ $attributes->merge([
                'type'=> $type ,
                'name'=> $name,
                'id'=> $name,
                'placeholder'=> $placeholder,
                 'class'=> 'block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6'
            ]) }} />

        </div>
        @error($name)
        <p class="mt-2 text-red-500 text-sm font-semibold">
            {{$message}}
        </p>
        @enderror
    </div>
</div>
