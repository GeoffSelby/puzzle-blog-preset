<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
        
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />
        
        <title>{{ $page->title ? $page->title .' | '. $page->siteName : $page->siteName }}</title>
        
        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-900 leading-normal font-sans">
        <header class="relative flex items-center h-24 py-4" role="banner">
            <div class="container flex items-center mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <h1 class="text-lg md:text-2xl text-indigo-700 font-medium hover:text-indigo-900 my-0">{{ $page->siteName }}</h1>
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center">
                    <nav class="hidden md:flex items-center justify-end text-sm">
                        @foreach ($page->navigation as $menuItem)
                            <a title="{{ $page->siteName }}" href="{{ $menuItem->link }}"
                                class="ml-6 font-normal text-gray-900 hover:text-indigo-700 hover:no-underline {{ $page->isActive($menuItem->link) ? 'active text-indigo-700 font-bold' : '' }}">
                                {{ $menuItem->title }}
                            </a>
                        @endforeach
                    </nav>
                    <button 
                        class="flex justify-center items-center h-10 px-5 md:hidden focus:outline-none"
                        onclick="navMenu.toggle()"
                    >
                        <svg 
                            id="js-nav-menu-show" 
                            xmlns="http://www.w3.org/2000/svg"
                            class="fill-current text-gray-900 h-9 w-4"
                            viewBox="0 0 32 32"
                        >
                            <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
                        </svg>

                        <svg
                            id="js-nav-menu-hide"
                            xmlns="http://www.w3.org/2000/svg"
                            class="hidden fill-current text-gray-900 h-9 w-4"
                            viewBox="0 0 36 30"
                        >
                            <polygon points="32.8,4.4 28.6,0.2 18,10.8 7.4,0.2 3.2,4.4 13.8,15 3.2,25.6 7.4,29.8 18,19.2 28.6,29.8 32.8,25.6 22.2,15 "/>
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        <nav id="js-nav-menu" class="nav-menu hidden md:hidden">
            <ul class="list-reset my-0">
                @foreach ($page->navigation as $menuItem)
                    <li class="pl-4">
                        <a
                            title="{{ $menuItem->title }}"
                            href="{{ $menuItem->link }}"
                            class="nav-menu__item text-gray-900 hover:text-indigo-700 hover:no-underline {{ $page->isActive($menuItem->link) ? 'active text-indigo-700 font-bold' : '' }}"
                        >{{ $menuItem->title }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <main role="main" class="flex flex-auto justify-center items-center container mx-auto py-16 px-6">
            @yield('body')
        </main>

        <footer class="text-center text-sm py-2" role="contentinfo">
            <div class="container mx-auto">
                <div class="flex flex-col md:flex-row md:justify-between tracking-wide">
                    <p>
                        &copy; {{ date('Y') }} Puzzle CLI.
                    </p>
    
                    <p>
                        Built with <a class="text-indigo-700 hover:underline hover:text-indigo-900 font-medium" href="http://jigsaw.tighten.co" target="_blank" title="Jigsaw by Tighten">Jigsaw</a>
                        and <a class="text-indigo-700 hover:underline hover:text-indigo-900 font-medium" href="https://tailwindcss.com" target="_blank" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                    </p>
                </div>
            </div>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
        <script>
            const navMenu = {
                toggle() {
                    const menu = document.getElementById('js-nav-menu');
                    menu.classList.toggle('hidden');
                    menu.classList.toggle('lg:block');
                    document.getElementById('js-nav-menu-hide').classList.toggle('hidden');
                    document.getElementById('js-nav-menu-show').classList.toggle('hidden');
                },
            }
        </script>
    </body>
</html>
