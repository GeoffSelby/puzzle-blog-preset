---
title: Blog
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.master')

@section('body')

    <div class="flex flex-col max-w-4xl">
        @foreach ($pagination->items as $post)
            <div>
                <h1 class="mb-0">
                    <a href="{{ $post->getUrl() }}" class="text-2xl md:text-3xl text-gray-900 font-serif hover:text-indigo-700 hover:no-underline">{{ $post->title }}</a>
                </h1>
                <p class="uppercase text-gray-500 tracking-wide text-xs md:text-sm mb-2 mt-0">
                        <span class="text-indigo-700">{{ $post->author }} |</span> {{ $post->getDate()->format('F j, Y') }}
                </p>
                <p class="text-gray-700">{!! $post->getExcerpt(250) !!}</p>
                <p><a class="uppercase text-indigo-700 text-sm hover:no-underline hover:text-indigo-900 tracking-wide border-b border-indigo-700 hover:border-indigo-900" href="{{ $post->getUrl() }}">Read More</a></p>
            </div>
    
            @if ($post != $pagination->items->last())
                <hr>
            @endif
        @endforeach
    </div>

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-gray-300 hover:bg-gray-300 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="{{ $pagination->currentPage == $pageNumber ? 'text-indigo-900 bg-gray-300 underline cursor-not-allowed' : 'text-indigo-700 bg-gray-200' }} hover:bg-gray-300 rounded mr-3 px-5 py-3"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-gray-200 hover:bg-gray-300 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
