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
        // Получение списка блюд по категории
        $dishes = dishes::where('category', $category)->get();
    
        // Передача данных во вьюху
        return view('dishes', [
            'dishes' => $dishes
        ]);
    }

    // Функция отображения страницы блюда
    public function infoDish($id) {
        // Поиск блюда по ID
        $dishInfo = dishes::find($id);
    
        // Передача данных в шаблон
        return view('product', [
            'dishInfo' => $dishInfo
        ]);
    }
}
