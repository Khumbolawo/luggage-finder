<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuggageTicketController extends Controller
{
    //
    public function create(){
        return view('luggage-ticket.create');
    }
}
