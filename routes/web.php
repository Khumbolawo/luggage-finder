<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/create-ticket', 'LuggageTicketController@create')->name('create-ticket');
Route::post('/create-ticket', 'LuggageTicketController@store')->name('store-ticket');

