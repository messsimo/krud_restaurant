<!-- Подключение файла сборщика -->
@extends("layouts.app")

<!-- Динамическое название сайта -->
@section("title")
    Krud | Cart
@endsection

<!-- Секция страницы -->
@section("cart")
    <!-- Щапка сайта -->
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="Krud">

        <nav>
            <a href="/">Acasă</a>
            <a href="{{ route('booking') }}">Rezervări</a>
            <a href="{{ route('delivery') }}">Livrări</a>
            <a href="{{ route('menu') }}">Meniu</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>

        <div class="cart">
            <a href="{{ route('cart') }}">
                <div class="cart-img">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet" fill="#666"><g fill="#666" transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1660 4961 c-50 -16 -112 -53 -148 -90 -20 -20 -273 -404 -562 -852 l-525 -815 -63 -12 c-85 -16 -154 -53 -222 -118 -65 -62 -103 -125 -125 -209 -53 -206 49 -424 241 -516 l70 -33 227 -1036 c147 -665 235 -1044 246 -1060 10 -14 33 -35 51 -47 l33 -23 1677 0 1677 0 33 23 c18 12 41 33 51 47 11 16 99 395 246 1060 l227 1036 70 33 c193 92 294 310 240 516 -42 164 -184 296 -350 327 l-59 12 -525 814 c-289 448 -542 832 -563 854 -79 81 -222 118 -333 86 -60 -18 -279 -155 -333 -209 -95 -95 -122 -242 -68 -371 8 -18 179 -288 381 -601 201 -312 366 -570 366 -572 0 -3 -477 -5 -1060 -5 -583 0 -1060 2 -1060 5 0 2 165 260 367 572 201 313 375 591 386 618 40 102 21 228 -47 323 -37 52 -262 205 -342 233 -55 19 -157 24 -204 10z m208 -355 c55 -36 102 -72 106 -82 4 -11 -122 -216 -415 -670 l-422 -654 -175 0 c-154 0 -173 2 -168 16 6 14 814 1271 898 1397 25 36 46 57 58 57 10 0 64 -29 118 -64z m1995 -665 c257 -399 467 -729 467 -733 0 -4 -78 -8 -173 -8 l-174 0 -422 655 c-336 520 -420 658 -413 671 17 30 195 143 222 141 22 -2 90 -103 493 -726z m871 -1055 c75 -31 109 -140 64 -205 -12 -19 -36 -44 -51 -55 l-28 -21 -2159 0 -2159 0 -28 21 c-52 39 -75 83 -70 137 5 57 30 95 78 119 32 17 157 18 2177 18 1804 0 2148 -2 2176 -14z m-254 -593 c0 -5 -91 -421 -202 -925 l-203 -918 -1515 0 -1515 0 -203 918 c-111 504 -202 920 -202 925 0 4 864 7 1920 7 1056 0 1920 -3 1920 -7z"/><path d="M1705 1996 c-41 -18 -83 -69 -90 -109 -7 -37 90 -997 106 -1042 24 -73 104 -115 178 -95 47 12 98 66 106 112 5 28 -86 974 -100 1035 -8 37 -64 92 -103 103 -47 13 -60 12 -97 -4z"/><path d="M2505 1996 c-41 -18 -83 -69 -90 -109 -3 -18 -5 -260 -3 -539 3 -494 4 -507 24 -534 37 -50 70 -68 124 -68 54 0 87 18 124 68 21 27 21 38 21 561 0 523 0 534 -21 561 -47 64 -119 88 -179 60z"/><path d="M3314 1999 c-36 -10 -91 -67 -99 -102 -14 -61 -105 -1007 -100 -1035 15 -79 105 -134 184 -112 45 12 96 64 105 107 15 69 106 1001 101 1030 -7 41 -50 92 -92 109 -36 16 -54 16 -99 3z"/></g></svg> 
                </div>

                <div class="cart-block">
                    <span>Item(s)</span>
                    <p>{{ $totalItems }}</p>
                </div>

                <div class="cart-block">
                    <span>Total</span>
                    <p class="cart-total">{{ $subtotal }} lei</p>
                </div>
            </a>
        </div>
    </header>
    <!-- Wrapper (начало) -->
    <div class="wrapper">

    <!-- Блок навигации -->
    <div class="navigation cart-nav">
        <span>Home / Cart </span>
        <hr>
    </div>

    <!-- Корзина -->
    <div class="user-cart">
        <h1>Cart</h1>

        <!-- Таблица -->
        @if (session('cart') != null && count(session('cart')) > 0)
        <table>
            <thead>
                <tr>
                    <th>Remove</th>
                    <th>Produs</th>
                    <th>Preț</th>
                    <th>Cantitate</th>
                    <th>Sub-total</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $el)
                    <tr>
                        <td><a href="{{ route('deleteItem', $el['id']) }}"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="26.000000pt" height="26.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g fill="red" transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M2260 4884 c-889 -121 -1627 -724 -1915 -1564 -197 -576 -162 -1212 98 -1762 127 -268 334 -547 545 -733 453 -400 985 -605 1572 -605 751 0 1449 354 1892 960 450 616 571 1416 323 2140 -202 588 -630 1072 -1190 1345 -228 111 -479 186 -738 220 -147 19 -443 18 -587 -1z m-485 -1265 c34 -9 99 -69 413 -382 l372 -371 373 371 c313 313 378 373 412 382 64 17 108 13 166 -16 92 -47 137 -150 109 -253 -11 -40 -50 -83 -383 -417 l-371 -373 371 -373 c333 -334 372 -377 383 -417 44 -167 -103 -314 -270 -270 -40 11 -83 50 -417 383 l-373 371 -372 -371 c-335 -333 -378 -372 -418 -383 -167 -44 -314 103 -270 270 11 40 50 83 383 418 l371 372 -371 373 c-333 334 -372 377 -383 417 -27 102 16 204 109 252 57 30 102 35 166 17z"/></g></svg></a></td>
                        <td class="td-item">
                            <img src="{{ asset('cover_images/' . $el['photo']) }}" alt="{{ $el['name'] }}">
                            <span>{{ $el['name'] }}</span>
                        </td>
                        <td>{{ $el['price'] }} lei</td>
                        <td>
                            <form action="{{ route('updateQuantity', $el['id']) }}" method="POST">
                            @csrf
                                <input type="number" name="quantity" value="{{ $el['quantity'] }}" min="1" onchange="this.form.submit()">
                            </form>
                        </td>
                        <td>{{ $el["total"] }} lei</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Оформление -->
        <div class="additional-info">
            <h2>Total coș</h2>

            <div class="additional-info--top">
                <div>
                    <p>Suma totală</p>
                    <p>Сantitate totală</p>
                </div>

                <div>
                <span>{{ $subtotal }} lei</span><br>
                <span>{{ $totalItems }} luc.</span>
                </div>
            </div>

            <button><a href="{{ route('checkout') }}">Finalizeză comanda</a></button>
        </div>
        @else 
            <p class="cart-nothing">Nu este nimic în cărucior</p>
        @endif
    </div>

    <!-- Wrapper (конец) -->
    </div>
@endsection