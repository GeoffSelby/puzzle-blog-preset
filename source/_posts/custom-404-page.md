---
extends: _layouts.post
section: content
title: Custom 404 Pages
date: 2019-05-15
description: Add a custom 404 page is easy with Jigsaw
---

This starter template includes a custom __404 Not Found__ error page, located at `/source/404.blade.php`. [To preview the 404 page](/404.html), you can visit `/404.html` in your browser.

```html
<!-- source/404.blade.php -->

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
```

---

Depending on where your site is hosted, you may need to configure your server to use the custom 404 page. For more details, visit the [Jigsaw documentation about configuring a custom 404 page](https://jigsaw.tighten.co/docs/custom-404-page/).