@extends('layouts.app')
@section('title', 'search')
@section('content')
    <section id="main" class="flex flex-col items-center justify-center">
        <div class="relative mb-5 w-full overflow-x-auto">
            <div class="mb-5">
                @foreach ($groupedTickets as $name => $tickets)
                    <p class="text-[28px] font-semibold dark:text-zinc-50">{{ $name }}'s tickets</p>
                @endforeach
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
                                <a class="dark:hover:text-zinc-50" href="{{ route('ticket-summary', $ticket->id) }}">link</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
