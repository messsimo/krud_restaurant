<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Подключение моделей
use App\Models\dishes;

class menuController extends Controller {
    // Функция отображения страницы
    public function showMenu() {
        // Подключение к таблице
        $dishes = new dishes();

        // Вывод информации из таблиц
        return view("menu", [
            "product1" => $dishes->where("category", "=", "Antreuri")->get(),
            "product2" => $dishes->where("category", "=", "Salate")->get(),
            "product3" => $dishes->where("category", "=", "Ciorbe și Supe")->get(),
            "product4" => $dishes->where("category", "=", "Paste și Risotto")->get(),
            "product5" => $dishes->where("category", "=", "Carne de Pasăre")->get(),
            "product6" => $dishes->where("category", "=", "Carne de Porc")->get(),
            "product7" => $dishes->where("category", "=", "Burgeri")->get(),
            "product8" => $dishes->where("category", "=", "Pește")->get(),
            "product9" => $dishes->where("category", "=", "Garnituri")->get(),
            "product10" => $dishes->where("category", "=", "Sosuri")->get(),
            "product11" => $dishes->where("category", "=", "Deserturi")->get(),
            "product12" => $dishes->where("category", "=", "Meniu de Post")->get()
        ]);
    }
}
