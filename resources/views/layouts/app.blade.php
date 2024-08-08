<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Luggage Finder | @yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="max-w-5xl mx-auto px-10 dark:bg-zinc-900">
        <!-- header -->
        <section id="header">
            <nav class="mb-7 mt-7">
                <div>
                    <ul class="flex items-center justify-between">
                        <li
                            class="text-[36px] font-bold hover:text-zinc-700 dark:text-zinc-50 dark:hover:text-zinc-300"
                        >
                            <a href="{{ route('home') }}">Luggage Finder</a>
                        </li>
                        <li>
                            <a href="{{ route('create-ticket') }}" class="hover:text-zinc-700 dark:text-zinc-50 dark:hover:text-zinc-300">
                                Create ticket
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        @yield('content')
</html>
