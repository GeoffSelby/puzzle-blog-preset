---
permalink: 404.html
---

@extends('_layouts.master')

@section('body')
    <div class="flex flex-col items-center text-gray-900 mt-32">
        <h1 class="text-6xl font-light leading-none mb-2">404</h1>

        <h2 class="text-3xl">Page not found.</h2>

        <hr class="block w-full max-w-sm mx-auto border my-8">

        <p class="text-xl">
            Oops! That page doesn't exist. <a title="Go home" href="/" class="font-medium text-indigo-700 hover:text-indigo-900 hover:underline">Go home</a>.
        </p>
    </div>
@endsection
