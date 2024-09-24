<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Подключение сессий
// Подключение моделей
use App\Models\contact;
// Подключение модулей
use App\Http\Requests\contactRequest;

class contactController extends Controller {
    // Функция отображения страницы
    public function showContact() {
        // Корзина
        $cart = session('cart', []);

        // Пересчет общей цены
        $subtotal = 0;
        foreach ($cart as $el) {
            $price = (float) $el['price'];
            $quantity = (int) $el['quantity'];
            $subtotal += $price * $quantity;
        }

        // Подсчет общего кол-во блюд
        $totalItems = 0;
        foreach ($cart as $el) {
            $quantity = (int) $el['quantity'];
            $totalItems += $quantity;
        }

        return view('contact', compact('cart', 'subtotal', 'totalItems'));
    }

    // Функция обработки формы
    public function contactForm(contactRequest $req) {
        // Подключение к таблице
        $contact = new contact();

        // Добавление данных в таблицу
        $contact->name = $req->input("name");
        $contact->email = $req->input("email");
        $contact->telefon = $req->input("telefon");
        $contact->message = $req->input("message");

        // Сохранение данных
        $contact->save();

        // Установка значения в сессию (успешной)
        Session::put("key", "success");
        // Установка сообщения (успешного)
        Session::flash("success", "Multumesc pentru mesaj!");

        // Переадресация обратно
        return redirect()->back();
    }
}
