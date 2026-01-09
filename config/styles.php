<?php

/*
|--------------------------------------------------------------------------
| Centralized Tailwind Styles
|--------------------------------------------------------------------------
|
| Define Tailwind classes for HTML elements in one location. These styles
| are used in both Blade templates (via config('styles.element')) and
| Markdown rendering (automatically transformed to prose-* classes).
|
*/

return [

    'h1' => "text-center mt-8 mb-12 md:mb-4 text-white text-3xl md:text-5xl font-bold relative after:content-[''] after:block after:w-32 after:h-0.5 after:bg-coral-400 after:mx-auto after:mt-6",

    // Add more elements as needed:
    // 'h2' => 'text-white text-2xl md:text-3xl font-semibold mt-6 mb-4',
    // 'h3' => 'text-white text-xl md:text-2xl font-semibold mt-4 mb-2',
    // 'p' => 'text-gray-300 leading-relaxed',
    // 'a' => 'text-coral-400 hover:text-coral-300 underline',

];
