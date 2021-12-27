@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex border-b-8 items-center px-1 pt-1 border-b-2 border-red text-sm font-medium leading-5 text-white focus:outline-none focus:border-red-300 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-lg hover:border-white-300 focus:outline-none focus:text-white focus:border-white-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes ]) }}>
    {{ $slot }}
</a>
