<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/contatti.blade.php', function () {
    return view('contatti');
});

Route::get('/chi_siamo.blade.php', function () {
    return view('chi_siamo');
});

Route::get('/documentazione.blade.php', function () {
    return view('documentazione');
});
