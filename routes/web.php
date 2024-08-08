<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LuggageTicketController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/create-ticket', [LuggageTicketController::class, 'create'])->name('create-ticket');
Route::post('/create-ticket', [LuggageTicketController::class, 'store'])->name('store-ticket');

