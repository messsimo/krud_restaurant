<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller {
    // Функция отображения корзины
    public function showCart() {
        return view("cart");
    }

    // Функция обработки страницы товара
    public function showCheckout() {
        return view("checkout");
    }
}
