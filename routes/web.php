<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Mail\Mailables\Content;
use App\Http\Controllers\ContactController;

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

Route::get('/', [function () {
    return view('frontend.home');
}]);

Route::get('contact-me', [ContactController::class, 'contact']);
Route::post('send-message', [ContactController::class, 'sendEmail'])->name('send.message');
