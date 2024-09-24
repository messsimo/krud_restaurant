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
        return view('delivery', [
            'cart' => $cart,
            'subtotal' => $subtotal,
            'totalItems' => $totalItems,
            'categories' => $categories->all(),
        ]);
        
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
