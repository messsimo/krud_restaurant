<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Подключение сессий
// Подключение моделей
use App\Models\dishes;
use App\Models\orders;
// Подключение модуля
use App\Http\Requests\checkoutRequest;

class cartController extends Controller {
    // Функция отображения корзины
    public function showCart() {
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

        return view('cart', compact('cart', 'subtotal', 'totalItems'));
    }
    

    // Функция добавления товара в корзину
    public function addItem($id) {
        // Выборка блюда из таблицы
        $dishes = dishes::find($id);
    
        // Сессия для хранения блюд
        $cart = session()->get('cart', []);
    
        // Условия добавления товара в корзину
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['total'] = $cart[$id]['price'] * $cart[$id]['quantity']; 
        } else {
            $cart[$id] = [
                'id' => $dishes->id,
                'name' => $dishes->name,
                'photo' => $dishes->photo,
                'price' => floatval($dishes->price), 
                'quantity' => 1,
                'total' => floatval($dishes->price) * 1, 
            ];            
        }

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

        // Сохраняем корзину в сессии
        session()->put('cart', $cart);

        // Переадрессация
        return view('cart', compact('cart', 'subtotal', 'totalItems'));
    }

    // Функция удаления блюда из корзины
    public function deleteItem($id) {
        // Корзина с сессиями
        $cart = session()->get('cart', []);
    
        // Условие удаления товара
        if (array_key_exists($id, $cart)) {
            unset($cart[$id]); 
            session()->put('cart', $cart);
        }

        return redirect()->route('cart');
    }    

    // Функция обновления кол-во блюда
    public function updateQuantity(Request $request, $id) {
        // Получение корзины
        $cart = session()->get('cart');

        // Условие иземенения кол-во блюда
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            $cart[$id]['total'] = $cart[$id]['price'] * $request->quantity;
            session()->put('cart', $cart);
        }

        // Редирект
        return redirect()->route('cart');
    }



    // Функция отображения Checkout страницы
    public function showCheckout() {
        $cart = session('cart', []);
    
        // Пересчет общей цены
        $subtotal = 0;
        foreach ($cart as $el) {
            $price = (float) $el['price'];
            $quantity = (int) $el['quantity'];
            $subtotal += $price * $quantity;
        }

        // Подсчет общего количества товаров
        $totalItems = 0;
        foreach ($cart as $el) {
            $quantity = (int) $el['quantity'];
            $totalItems += $quantity;
        }
    
        // Инициализация массива для заказа
        $order = [];
    
        // Перебор массива товаров пользователя
        foreach ($cart as $el) {
            $price = (float) $el['price'];
            $quantity = (int) $el['quantity'];
    
            // Добавление информации о товарах в массив заказа
            $order[] = $el['name'] . ' (Количество: ' . $quantity . ')';
        }
    
        // Возвращаем данные на страницу checkout
        return view('checkout', compact('cart', 'subtotal', 'totalItems', 'order'));
    }
    
    // Функция обработки формы чекаута
    public function checkoutForm(checkoutRequest $req) {
        // Подключение к таблице
        $orders = new orders();

        // Занесение данных в таблицу
        $orders->name = $req->input("name");
        $orders->telefon = $req->input("telefon");
        $orders->email = $req->input("email");
        $orders->dishes = $req->input("order");
        $orders->total = $req->input("total");
        $orders->delivery_method = $req->input("delivery-method");
        $orders->payment = $req->input("payment");
        $orders->message = $req->input("message");

        // Сохранение данных
        $orders->save();

        // Установка значения в сессию (успешной)
        Session::put("key", "success");
        // Установка сообщения (успешного)
        Session::flash("success", "Vă mulțumim pentru comandă! Vă vom contacta în scurt timp pentru a confirma");

        // Переадресация обратно
        return redirect()->back();
    }
}
