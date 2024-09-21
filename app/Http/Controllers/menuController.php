<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller {
    // Функция отображения страницы
    public function showMenu() {
        return view("menu");
    }
}
