@props([])

<header {{ $attributes->merge(['class' => 'text-center mt-8 mb-12 md:mb-4']) }}>
    <x-h1>{{ $slot }}</x-h1>
    <x-horizontal-line />
</header>
