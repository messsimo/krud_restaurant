<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session; // Подключение сессий
use Illuminate\Http\Request;
// Подключение модулей
use App\Http\Requests\bookingRequest;
// Подключение моделей
use App\Models\booking;

class bookingController extends Controller {
    // Функция отображения странциы
    public function showPage() {
        return view("booking");
    }

    // Функция обработки формы бронирования
    public function bookingForm(bookingRequest $req) {
        // Подключение к таблице
        $booking = new booking();

        // Добавление данных в таблицу
        $booking->name = $req->input("name");
        $booking->email = $req->input("email");
        $booking->telefon = $req->input("telefon");
        $booking->data = $req->input("data");
        $booking->ora = $req->input("time");
        $booking->persons = $req->input("people");

        // Сохранение данных
        $booking->save();

        // Установка значения в сессию (успешной)
        Session::put("key", "success");
        // Установка сообщения (успешного)
        Session::flash("success", "O masă ți-a fost rezervată! Te aşteptăm!");

        // Переадресация обратно
        return redirect()->back();
    }
}
