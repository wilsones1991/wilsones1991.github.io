@props(['id', 'nextId' => null])

<section id="{{ $id }}" {{ $attributes->merge(['class' => 'relative min-h-screen px-8 text-white']) }}>
    {{ $slot }}

    @if($nextId)
        <a href="#{{ $nextId }}" class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white/70 hover:text-coral-300 hover:-translate-y-1 transition-all duration-300" aria-label="Next section">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </a>
    @endif
</section>
