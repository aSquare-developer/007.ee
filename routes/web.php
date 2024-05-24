<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/{locale?}', function ($locale = null) {
    if(in_array($locale, config('app.available_locales'))){
        app()->setLocale($locale);
        Session::put('locale', $locale);
    }

    return view('index');
});

Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('contact.send.message');