<?php

use App\Http\Controllers\KontaktController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'public.home')->name('home');
Route::view('/kontakt-oss', 'public.kontakt')->name('kontakt');
Route::post('/kontakt-oss', [KontaktController::class, 'send'])->name('kontakt.send');
Route::view('/personvern', 'public.personvern')->name('personvern');
Route::view('/cookies', 'public.cookies')->name('cookies');
Route::view('/vilkar', 'public.vilkar')->name('vilkar');
Route::view('/abt', 'public.abt')->name('abt');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
