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

        // ->get() at the end of first if fixed request variable not receiving any data
        if($search) {
            $tickets = LuggageTicket::where('last_name', 'like', '%' . $search. '%')->get();
            // passing lastnames as grouped variables so multiple entries in the array are grouped under one name. 
            //meant to make rendering a single name in the search view possible
            $groupedTickets = $tickets->groupBy('name');
        } else {
            $tickets = LuggageTicket::all();
        }

        return view('luggage-ticket.search', compact('groupedTickets', 'tickets'));
    }
}
