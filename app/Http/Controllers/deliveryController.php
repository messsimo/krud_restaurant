<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deliveryController extends Controller {
    // Функция отображения страницы
    public function showDelivery() {
        return view("delivery");
    }
}
