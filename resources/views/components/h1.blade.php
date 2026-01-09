@props([])

<h1 {{ $attributes->merge(['class' => 'page-header']) }}>
    {{ $slot }}
</h1>