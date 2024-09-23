<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller {
    // Функция отображения корзины
    public function showCart() {
        return view("cart");
    }
}
