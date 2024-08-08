<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuggageTicket extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'ticket_number',
        'number_of_luggage_pieces',
    ];
}
