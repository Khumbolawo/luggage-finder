@extends('layouts.app')
@section('title', 'summary')
@section('content')
    <section class="flex flex-wrap justify-start gap-4 md:justify-around  mt-10 ">
        <div>
            <h2 class="text-[28px] font-semibold dark:text-zinc-50">Ticket Summary</h2>
            <p class="my-2 dark:text-zinc-50">
                <strong>Name:</strong>
                {{ $ticket->name }}
            </p>
            <p class="my-2 dark:text-zinc-50">
                <strong>Email:</strong>
                {{ $ticket->email }}
            </p>
            <p class="my-2 dark:text-zinc-50">
                <strong>Ticket number:</strong>
                {{ $ticket->ticket_no }}
            </p>
            <p class="my-2 dark:text-zinc-50">
                <strong>Number of luggage pieces:</strong>
                {{ $ticket->luggage }}
            </p>
            
        </div>
        <div>
            {!! $qrcode !!}
        </div>
    </section>
@endsection
