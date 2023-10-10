<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('landingpage');
=======
Route::get('/home', function () {
    return view('dashboard');
>>>>>>> f8dc595 (dashboard)
});

Route::get('mail', [MailController::class, 'mail' ]);
