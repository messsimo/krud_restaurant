<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller {
    // Функция отображения странциы
    public function showPage() {
        return view("booking");
    }
}
