@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section id="main" class="flex flex-col items-center justify-center">
        <div class="mb-6 w-full">
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

        <div class="relative mb-5 w-full overflow-x-auto">
            <div class="mb-5">
                <p class="text-[28px] font-semibold dark:text-zinc-50">All tickets</p>
            </div>
            <table class="mb-10 w-full text-left text-sm text-zinc-500 rtl:text-right dark:text-zinc-400">
                <thead class="text-xs uppercase text-zinc-900 dark:text-zinc-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Ticket Number</th>
                        <th scope="col" class="px-6 py-3">First Name</th>
                        <th scope="col" class="px-6 py-3">Last Name</th>
                        <th scope="col" class="px-6 py-3">Number of pieces</th>
                        <th scope="col" class="px-6 py-3">QR Code</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $ticket)
                        <tr class="bg-white dark:bg-zinc-800">
                            <td class="px-6 py-4">
                                {{ $ticket->ticket_no }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $ticket->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $ticket->last_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $ticket->luggage }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="#">link</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button
            type="button"
            class="mb-2 me-2 self-start rounded-lg bg-zinc-800 px-5 py-2.5 text-sm font-bold text-white hover:bg-zinc-900 focus:outline-none focus:ring-4 focus:ring-zinc-300 dark:border-zinc-700 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:focus:ring-zinc-700"
        >
            <a href="{{ route('create-ticket') }}">Create ticket</a>
        </button>
        {{-- code to show success alert when data is sent to database --}}
        @if (session('success'))
            <script>
                alert('{{ session('success') }}');
            </script>
        @endif
    </section>
@endsection
