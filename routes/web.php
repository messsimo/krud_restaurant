<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллера
use App\Http\Controllers\mainController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\deliveryController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\cartController;

// Отслеживание главной страницы
Route::get('/', [mainController::class, "showMain"])->name("main");

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

// Отслеживание страницы с меню
Route::get('/menu', [menuController::class, "showMenu"])->name("menu");

// Отслеживания страницы с контактом
Route::get('/contact', [contactController::class, "showContact"])->name("contact");
// Отслеживание формы 
Route::post('/contact', [contactController::class, "contactForm"])->name("contact_form");

// Отслеживание корзины
Route::get("/cart", [cartController::class, "showCart"])->name("cart");
// Отслеживание страницы обработки заказа
Route::get("/checkout", [cartController::class, "showCheckout"])->name("checkout");
// Добавление блюда в корзину
Route::get("/cart/add/{id}", [cartController::class, "addItem"])->name("addItem");
// Удаление блюда из корзины
Route::get("/cart/delete/{id}", [cartController::class, "deleteItem"])->name("deleteItem");
// Изменения кол-во блюда
Route::post('/cart/update/{id}', [cartController::class, 'updateQuantity'])->name('updateQuantity');
// Обработка формы заказа
Route::post("/checkout", [cartController::class, "checkoutForm"])->name("checkoutForm");