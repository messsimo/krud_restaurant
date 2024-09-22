<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller {
    // Функция отображения страницы
    public function showContact() {
        return view("contact");
    }
}
