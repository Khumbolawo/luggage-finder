<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LuggageTicket;

class LuggageTicketController extends Controller
{
    //
    public function create(){
        return view('luggage-ticket.create');
    }

    public function store(Request $request){
        //makes sure users entered expected data
        $validatedData = $request->validate([
            'name'=> 'required|string',
            'last_name'=>'required|string',
            'email'=> 'required|string',
            'phone'=> 'required|string',
            'ticket_no'=> 'required|string',
            'luggage'=> 'required|int',
        ]);

        //method that actually sends data to database im assuming
        $luggageTicket = LuggageTicket::create($validatedData);

        //sends user to home page and gives success message
        return redirect()->route('home')->with('success', 'Luggage ticket created successfully');
    }
}
