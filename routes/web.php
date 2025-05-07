<?php

use Illuminate\Support\Facades\Route;
use Filament\Facades\Filament; // Import class Filament
use App\Filament\Pages\CustomDashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Registrasi halaman Filament

// Route untuk halaman welcome
Route::get('/', function () {
    return view('home');
});