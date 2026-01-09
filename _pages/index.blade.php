@extends('hyde::layouts.app')
@section('content')
@php($title = "Home")

    <main id="content" class="flex flex-col justify-center items-center max-w-7xl mx-auto text-white min-h-[calc(100vh-136px)] px-4 md:px-8 py-8 gap-8 md:gap-12">
        <section id="hero" class="flex flex-col md:flex-row justify-center items-center gap-6 md:gap-0">
            <img src="media/profile-pic.jpg" alt="Profile Picture" class="w-48 md:w-82 h-auto rounded-md md:mr-8" />
            <div class="flex-col">
                <h1 class="text-center text-2xl md:text-3xl">Hello, my name is <span class="font-bold">Eric Wilson</span>.</h1>
                <p class="text-center text-base md:text-lg mt-4">I am a full stack software developer. Welcome to my website.</p>
            </div>
        </section>

        <nav class="flex flex-col sm:flex-row gap-6 sm:gap-12 text-lg">
            <a href="projects" class="text-coral-400 hover:text-coral-300 transition-colors group">
                Projects <span class="inline-block group-hover:translate-x-1 transition-transform">&rarr;</span>
            </a>
            <a href="mailto:contact@eric-wilson.net" class="text-coral-400 hover:text-coral-300 transition-colors group">
                Contact <span class="inline-block group-hover:translate-x-1 transition-transform">&rarr;</span>
            </a>
            <a href="media/eric-wilson-resume.pdf" class="text-coral-400 hover:text-coral-300 transition-colors group">
                Resume <span class="inline-block group-hover:translate-x-1 transition-transform">&darr;</span>
            </a>
        </nav>
    </main>

@endsection
