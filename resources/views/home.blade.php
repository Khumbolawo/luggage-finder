<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Luggage Finder | Home</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="mx-auto dark:bg-zinc-900">
        <!-- header -->
        <section id="header">
            <nav class="mb-7 mt-7">
                <div>
                    <ul class="flex items-center justify-around">
                        <li
                            class="text-[36px] font-bold hover:text-zinc-700 dark:text-zinc-50 dark:hover:text-zinc-300"
                        >
                            <a href="#">Luggage Finder</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-zinc-700 dark:text-zinc-50 dark:hover:text-zinc-300">
                                Create ticket
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section id="main" class="flex flex-col items-center justify-center">
            <div class="mb-6 flex w-1/2 flex-col">
                <!-- head text -->
                <div class="mb-5">
                    <p class="mb-3 text-[28px] font-semibold dark:text-zinc-50">Search tickets</p>
                    <p class="dark:text-zinc-300">Search by surname or ticket number</p>
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

            <div class="relative mb-5 w-1/2">
                <div class="mb-5">
                    <p class="text-[28px] font-semibold dark:text-zinc-50">All tickets</p>
                </div>
                <table
                    class="w-full overflow-x-auto bg-zinc-100 text-xs uppercase shadow-md mb-10 sm:rounded-lg dark:bg-zinc-700 dark:text-zinc-50"
                >
                    <thead>
                        <tr>
                            <th class="px-6 py-3">Ticket Number</th>
                            <th class="px-6 py-3">Customer</th>
                            <th class="px-6 py-3">Number of pieces</th>
                            <th class="px-6 py-3">QR Code</th>
                        </tr>
                    </thead>
                </table>
                <button
                    type="button"
                    class="mb-2 me-2 self-start rounded-lg bg-zinc-800 px-5 py-2.5 text-sm font-bold text-white hover:bg-zinc-900 focus:outline-none focus:ring-4 focus:ring-zinc-300 dark:border-zinc-700 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:focus:ring-zinc-700"
                >
                    Create ticket
                </button>
            </div>
        </section>
    </body>
</html>
