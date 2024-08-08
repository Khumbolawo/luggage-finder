<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuggageTicket extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'ticket_no',
        'luggage',
    ];
}
