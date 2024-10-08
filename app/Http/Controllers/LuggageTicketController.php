<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LuggageTicket;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class LuggageTicketController extends Controller
{
    //method to direct to a form that creates tickets
    public function create(){
        return view('luggage-ticket.create');
    }

    //method that stores data from the form into my database and generates a qrcode based on the ticket's id
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

        //storing summary url in a variable to encode to the qrcode
        $summaryURL = route('ticket-summary', ['ticket' => $luggageTicket->id]);

        Log::info('Generated URL: ' . $summaryURL);

        $qrcode = QrCode::size(200)->generate($summaryURL);
        //saving the created qr code into a qrcode field in the database as an svg image file
        $luggageTicket->qr_code = $qrcode;
        $luggageTicket->save();
        //sends user to ticket summary page with qrcode 
        return redirect()->route('ticket-summary', ['ticket' => $luggageTicket->id]);
    }

    public function show (LuggageTicket $ticket){
        $qrcode = $ticket->qr_code;

        return view('luggage-ticket.ticket_summary', compact('ticket', 'qrcode'));
    }
}
