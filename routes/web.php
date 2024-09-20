<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллера
use App\Http\Controllers\bookingController;
use App\Http\Controllers\deliveryController;

// Отслеживание главной страницы
Route::get('/', function () {
    return view('main');
});

// Отслеживание страницы бронирования
Route::get('/booking', [bookingController::class, "showPage"])->name("booking");
// Обработка формы бронирования стола
Route::post('/booking', [bookingController::class, "bookingForm"])->name("booking_form");

// Отслеживание страницы доставки
Route::get('/delivery', [deliveryController::class, "showDelivery"])->name("delivery");
// Перенаправление на страницу блюд
Route::get('/delivery/{category}', [deliveryController::class, "showDishes"])->name("dishes");
// Перенаправление на страницу конкретного блюда
Route::get('/delivery_dish/{id}', [deliveryController::class, "infoDish"])->name("info_dish");