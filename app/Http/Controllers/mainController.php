<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller {
    // Функция отображения страницы
    public function showMain() {
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

        // Переадрессация
        return view('main', compact('cart', 'subtotal', 'totalItems'));
    }
}
