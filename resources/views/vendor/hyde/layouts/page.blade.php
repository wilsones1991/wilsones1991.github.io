{{-- The Markdown Page Layout --}}
@extends('hyde::layouts.app')
@section('content')

    <main id="content">
        <article @class(['mx-auto', config('markdown.prose_classes', 'prose dark:prose-invert')])>
            {{ $content }}
        </article>
    </main>

@endsection