@extends('layouts.app')
@section('title', 'Create luggage ticket')
@section('content')
    <section>
        <form method="POST" action=" {{ route('store-ticket') }}" class="mx-auto max-w-2xl">
            <div>
                <p class="mb-3 text-[28px] font-semibold dark:text-zinc-50">Create a ticket</p>
            </div>
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block text-sm font-medium text-zinc-900 dark:text-white">Your name</label>
                <input
                    name="name"
                    type="text"
                    id="name"
                    class="block w-full rounded-lg border border-zinc-300 bg-zinc-50 p-2.5 text-sm text-zinc-900 focus:border-zinc-500 focus:ring-zinc-500 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-400 dark:focus:border-zinc-500 dark:focus:ring-zinc-500"
                    required
                />
            </div>
            <div class="mb-5">
                <label for="last_name" class="mb-2 block text-sm font-medium text-zinc-900 dark:text-white">Your last name</label>
                <input
                    name="last_name"
                    type="text"
                    id="last_name"
                    class="block w-full rounded-lg border border-zinc-300 bg-zinc-50 p-2.5 text-sm text-zinc-900 focus:border-zinc-500 focus:ring-zinc-500 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-400 dark:focus:border-zinc-500 dark:focus:ring-zinc-500"
                    required
                />
            </div>
            <div class="mb-5">
                <label for="email" class="mb-2 block text-sm font-medium text-zinc-900 dark:text-white">
                    Your email
                </label>
                <input
                    name="email"
                    type="email"
                    id="email"
                    class="block w-full rounded-lg border border-zinc-300 bg-zinc-50 p-2.5 text-sm text-zinc-900 focus:border-zinc-500 focus:ring-zinc-500 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-400 dark:focus:border-zinc-500 dark:focus:ring-zinc-500"
                    placeholder="name@email.com"
                    required
                />
            </div>
            <div class="mb-5">
                <label for="phone-number" class="mb-2 block text-sm font-medium text-zinc-900 dark:text-white">
                    Your phone number
                </label>
                <input
                    name="phone"
                    type="text"
                    id="phone-number"
                    class="block w-full rounded-lg border border-zinc-300 bg-zinc-50 p-2.5 text-sm text-zinc-900 focus:border-zinc-500 focus:ring-zinc-500 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-400 dark:focus:border-zinc-500 dark:focus:ring-zinc-500"
                    required
                />
            </div>
            <div class="mb-5">
                <label for="ticket-number" class="mb-2 block text-sm font-medium text-zinc-900 dark:text-white">
                    Your ticket number
                </label>
                <input
                    name="ticket_no"
                    type="text"
                    id="ticket-number"
                    class="block w-full rounded-lg border border-zinc-300 bg-zinc-50 p-2.5 text-sm text-zinc-900 focus:border-zinc-500 focus:ring-zinc-500 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-400 dark:focus:border-zinc-500 dark:focus:ring-zinc-500"
                    required
                />
            </div>
            <div class="mb-5">
                <label for="number-of-pieces" class="mb-2 block text-sm font-medium text-zinc-900 dark:text-white">
                    Your number of pieces
                </label>
                <input
                    name="luggage"
                    type="number"
                    id="number-of-pieces"
                    class="block w-full rounded-lg border border-zinc-300 bg-zinc-50 p-2.5 text-sm text-zinc-900 focus:border-zinc-500 focus:ring-zinc-500 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-400 dark:focus:border-zinc-500 dark:focus:ring-zinc-500"
                    required
                />
            </div>
            <button
                type="submit"
                class="mb-2 me-2 self-start rounded-lg bg-zinc-800 px-5 py-2.5 text-sm font-bold text-white hover:bg-zinc-900 focus:outline-none focus:ring-4 focus:ring-zinc-300 dark:border-zinc-700 dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:focus:ring-zinc-700"
            >
                Create ticket
            </button>
        </form>
    </section>
@endsection
