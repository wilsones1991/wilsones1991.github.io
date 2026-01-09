@props(['id', 'nextId' => null, 'isFirst' => false, 'isLast' => false, 'theme' => 'blue'])

@php
    // First section takes full viewport height minus navbar
    // Last section takes full viewport height minus footer
    // Others take full viewport height
    $heightClass = $isFirst
        ? 'min-h-[calc(100vh-190px)]'
        : ($isLast ? 'min-h-[calc(100vh-56px)]' : 'min-h-screen');

    // Theme backgrounds - blue is default, terracotta is alternate
    $bgClass = $theme === 'terracotta' ? 'bg-[#1f1412]' : 'bg-[#0a0629]';
@endphp

<section
    id="{{ $id }}"
    class="flex flex-col {{ $heightClass }} {{ $bgClass }} text-white"
>
    <div {{ $attributes->merge(['class' => 'flex-1 overflow-y-auto py-4 px-4 md:px-8 mx-auto w-full']) }}>
        {{ $slot }}
    </div>

    @if($nextId)
        <div class="flex justify-center py-4 shrink-0">
            <a href="#{{ $nextId }}" class="text-white/70 hover:text-coral-300 hover:-translate-y-1 transition-all duration-300" aria-label="Next project">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
        </div>
    @endif
</section>
