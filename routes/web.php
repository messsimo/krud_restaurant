<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллера
use App\Http\Controllers\bookingController;

// Отслеживание главной страницы
Route::get('/', function () {
    return view('main');
});

// Отслеживание страницы бронирования
Route::get('/booking', [bookingController::class, "showPage"])->name("booking");