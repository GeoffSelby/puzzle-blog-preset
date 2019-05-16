@extends('_layouts.master')

@section('body')
    <div class="max-w-4xl mx-auto">

        <h1 class="leading-none font-serif text-5xl mb-2">{{ $page->title }}</h1>

        <p class="text-gray-700 uppercase font-medium text-xs md:text-sm tracking-wide mb-2 md:mt-0">
            <span class="text-indigo-700">{{ $page->author }} |</span> {{ date('F j, Y', $page->date) }}
        </p>

        <div class="border-b border-gray-300 mb-10 pb-4" v-pre>
            @yield('content')
        </div>

        <nav class="flex justify-between text-sm md:text-base">
            <div>
                @if ($next = $page->getNext())
                    <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                        &LeftArrow; {{ $next->title }}
                    </a>
                @endif
            </div>

            <div>
                @if ($previous = $page->getPrevious())
                    <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                        {{ $previous->title }} &RightArrow;
                    </a>
                @endif
            </div>
        </nav>
    </div>
@endsection
