<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LuggageTicket;

class MainController extends Controller
{
    //
    public function index() {
        $tickets = LuggageTicket::all();
        return view('home', compact('tickets'));
    }

}
