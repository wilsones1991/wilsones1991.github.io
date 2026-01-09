<a href="{{ $item }}" {{ $attributes->except('item')->class([
    'navigation-link block my-2 md:my-0 md:inline-block py-1 hover:text-coral-300 transition-colors',
    'text-white' => !$item->isActive(),
    'navigation-link-active text-coral-400 border-l-4 border-coral-400 md:border-none font-medium -ml-6 pl-5 md:ml-0 md:pl-0 bg-gray-800 md:bg-transparent dark:md:bg-transparent' => $item->isActive()
])->merge($item->getExtraAttributes())->merge([
    'aria-current' => $item->isActive() ? 'page' : false,
]) }}>{{ $item->getLabel() }}</a>