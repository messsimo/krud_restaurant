<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Подключение моделей
use App\Models\categories;
use App\Models\dishes;

class deliveryController extends Controller {
    // Функция отображения страницы
    public function showDelivery() {
        // Подключение к таблице
        $categories = new categories();

        // Передаяа данных в шаблон
        return view("delivery", ["categories" => $categories->all()]);
    }

    // Функция отображения блюд категории
    public function showDishes($category) {
        // Подключение к таблице
        $dishes = new dishes();

        // Выборка элементов из таблицы + вывод
        return view("dishes", ["dishes" => $dishes->where("category", $category)->get()]);

    }
}
