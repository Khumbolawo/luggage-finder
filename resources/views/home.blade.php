<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Luggage Finder | Home</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="mx-auto dark:bg-zinc-900">
        <section id="header">
            <nav class="mb-7 mt-7">
                <div>
                    <ul class="flex items-center justify-around">
                        <li class="text-[36px] font-bold hover:text-zinc-700 dark:text-zinc-50"><a href="#">Luggage Finder</a></li>
                        <li><a href="#" class="hover:text-zinc-700 dark:text-zinc-50">Create ticket</a></li>
                    </ul>
                </div>
            </nav>
        </section>
        <section id="main" class="flex flex-col justify-center items-center">
            <div class="w-1/2 flex flex-col">
                <!-- head text -->
                 <div class="mb-5">
                    <p class="font-semibold text-[28px] dark:text-zinc-50">Search tickets</p>
                 </div>
                <!-- searchbar -->
                <div class="relative">
                    <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                        <svg
                            class="h-4 w-4 text-zinc-500 dark:text-zinc-400"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 20 20"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                            />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                    <input
                        type="text"
                        id="search-navbar"
                        class="block w-full rounded-lg border border-zinc-300 bg-zinc-50 p-2 ps-10 text-sm text-zinc-900 focus:border-zinc-500 focus:ring-zinc-500 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-400 dark:focus:border-zinc-500 dark:focus:ring-zinc-500"
                        placeholder="Search..."
                    />
                </div>
            </div>
            <div>
                <table class="dark:text-zinc-50">
                    <thead>
                        <tr>
                            <th class="px-6 py-3">
                                Ticket Number
                            </th>
                            <th class="px-6 py-3">
                                Customer 
                            </th>
                            <th class="px-6 py-3">
                                Number of pieces
                            </th>
                            <th class="px-6 py-3">
                                QR Code
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </section>
    </body>
</html>
