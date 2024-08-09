<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LuggageTicket;

class SearchController extends Controller
{
    //
    public function search(Request $request) {
        // take input from search form and place into search variable
        $search = $request->input('search');

        //create anonymous query function inside of normal 'where' function to let us search for multiple parameters from the search input field
        $tickets = LuggageTicket::where(function ($query) use ($search) {
            $query->where('last_name', 'like', '%' . $search . '%')
                  ->orWhere('ticket_no', $search);
        })->get();

        $groupedTickets = $tickets->groupBy('name');

        return view('luggage-ticket.search', compact('groupedTickets', 'tickets'));
    }
}
