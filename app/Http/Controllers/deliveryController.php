<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Подключение моделей
use App\Models\categories;

class deliveryController extends Controller {
    // Функция отображения страницы
    public function showDelivery() {
        // Подключение к таблице
        $categories = new categories();

        // Передаяа данных в шаблон
        return view("delivery", ["categories" => $categories->all()]);
    }
}
