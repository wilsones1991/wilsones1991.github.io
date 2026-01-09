@extends('hyde::layouts.app')
@section('content')

    <main id="content">
        <x-h1>Projects</x-h1>
        <ul id="projects" class="flex flex-col">
            @foreach(DataCollection::markdown('projects') as $project)
                <li>
                    <x-project-section
                        :id="'project-' . $loop->index"
                        :next-id="$loop->last ? null : 'project-' . ($loop->index + 1)"
                        :is-first="$loop->first"
                        :is-last="$loop->last"
                        :theme="$loop->even ? 'terracotta' : 'blue'"
                        class="max-w-7xl mx-auto"
                    >
                        <h2 class="text-center text-2xl md:text-4xl font-semibold mb-6 md:mb-8 mt-4 md:mt-8">{{ $project->matter->title }}</h2>
                        <div class="flex flex-col lg:flex-row justify-end items-center gap-6 lg:gap-10 {{ $loop->even ? 'lg:flex-row-reverse' : '' }} py-8">
                            <img class="w-full lg:w-[calc(50%-16px)] h-fit rounded-lg" src="media/{{ $project->matter->image}}" alt="{{ $project->matter->title }}" />
                            <div class="w-full lg:w-[calc(50%-16px)]">
                                @if($project->matter->technologies)
                                    <ul class="flex flex-wrap gap-2 md:gap-3 mb-4 md:mb-6 list-none p-0">
                                        @foreach($project->matter->technologies as $technology)
                                            <li class="inline-flex items-center px-3 md:px-4 py-1.5 md:py-2 text-sm md:text-base font-medium rounded-md {{ $loop->parent->even ? 'bg-midnight-400/20 text-midnight-300' : 'bg-coral-400/20 text-coral-300' }}">{{ $technology }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="prose prose-invert prose-sm lg:prose-base">{{ $project->markdown->toHtml() }}</div>
                            </div>
                        </div>
                    </x-project-section>
                </li>
            @endforeach
        </ul>
    </main>

@endsection
