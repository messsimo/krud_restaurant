<!-- Подключение файла сборщика -->
@extends("layouts.app")

<!-- Динамическое название сайта -->
@section("title")
    Krud
@endsection

<!-- Секция страницы -->
@section("main")
    <!-- Щапка сайта -->
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="Krud">

        <nav>
            <a href="/" class="active">Acasă</a>
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
                    <p>0</p>
                </div>

                <div class="cart-block">
                    <span>Total</span>
                    <p class="cart-total">0,00 lei</p>
                </div>
            </a>
        </div>
    </header>

    <!-- Блок Hero -->
    <video autoplay loop>
        <!-- <source src="{{ asset('video/hero.mov') }}" type="video/quicktime"> -->
        <source src="{{ asset('video/hero.mp4') }}" type="video/mp4">
        Ваш браузер не поддерживает видео-тег.
    </video>

    <!-- Промежуточный блок #1 -->
    <div class="temp-1">
        <img src="{{ asset('images/temp-img1.png') }}" alt="Krud Restaurant">

        <div class="temp-1--text">
            <h2>Braserie</h2>
            <p>Krud este un concept local modern, creat din dorința de a promova, de a susține producătorii români din toate colțurile țării și de a ajuta la creșterea economiei locale promovând calitatea.</p>
            <span>Misiunea noastră este de a oferi clienților mai mult decât mâncare de calitate. Ne propunem sa îți oferim de fiecare dată o experiență fantastică, prin intermediul bucătarilor noștri iscusiți și a specialităților culinare deosebite.</span>
            <span>O confirmare a efortului nostru continuu a fost primirea unei 'bonete', pentru unul dintre cele mai mari punctaje de rating pentru puținele restaurante premiate și incluse în ghidul 2019 din Iași din partea celor de la Gault&Millau - primul ghid internațional gastronomic prezent în România.</span>
        </div>
    </div>

    <!-- Промежуточный блок #2 -->
    <div class="temp-2">
        <div class="temp-2--text">
            <h2>Restaurant</h2>
            <p>Krud, un concept de a mânca</p>
            <div class="sub-text">
                <span>Mai mult decât un simplu loc de petrecere a timpului liber, Krud Braserie este punctul de întâlnire a unei comunități: cea a iubitorilor de produse românești.</span>
                <span>Aici, se regăsesc laolaltă fructe și legume proaspete, lactate delicioase și preparate din carne savuroase, dulcețuri naturale și miere de diferite tipuri, zacuscă unică pregătită de bucătarii Krud și specialitățile culinare ale acestora.</span>
            </div>

            <a href="{{ route('delivery') }}">Vezi meniul</a>
        </div>

        <img src="{{ asset('images/temp-img2.png') }}" alt="Krud Restaurant">
    </div> 
    
    <!-- Промежуточный блок #3 -->
    <div class="temp-3">
        <h2>La creme de la creme</h2>
        <p>CARNE MATURATĂ DE VITĂ</p>
        <div class="temp-3--text">
            <span>Vă invităm să încercați selecția de carne de vită maturată, de la producători locali adusă direct în bucătăria Krud.</span>
            <span>O experință culinară care vă va stimula simțurile.</span>
        </div>
        <div class="temp-3--text-a">
            <a href="{{ route('menu') }}">VEZI DETALII</a>
        </div>
    </div>

    <!-- Блок с отзывами -->
    <div class="reviews">
        <h2>Testimoniale</h2>

        <div class="reviews-container">
            <!-- #1 -->
            <div class="block active-review">
                <div class="top-block">
                    <svg class="prevBtn" version="1.0" xmlns="http://www.w3.org/2000/svg" width="61px" height="61px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M3445 4611 c-28 -13 -343 -322 -1012 -992 -871 -873 -973 -978 -983 -1016 -25 -98 -86 -31 983 -1102 733 -734 983 -978 1016 -993 89 -41 194 10 220 108 24 90 72 37 -922 1032 l-912 912 912 913 c786 787 913 917 922 952 27 100 -58 206 -164 205 -11 0 -38 -9 -60 -19z"/></g></svg>
                    <span>"Am mâncat un angus burger care era foarte suculent și gustos, dar am încercat și din alte farfurii de la masă noastră, bucatele erau delicioase. E unul din locurile rare în Iași unde se gătește cu gust. Recomand cu încredere!"</span>
                    <svg class="nextBtn" version="1.0" xmlns="http://www.w3.org/2000/svg" width="61px" height="61px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1545 4616 c-72 -32 -116 -121 -96 -193 9 -31 171 -198 923 -950 l913 -913 -911 -912 c-716 -716 -914 -921 -923 -949 -26 -83 38 -189 124 -205 91 -17 40 -62 1102 999 881 881 983 986 993 1025 25 97 86 30 -983 1101 -669 670 -984 979 -1012 992 -47 22 -88 23 -130 5z"/></g></svg>
                </div>

                <div class="sub-block">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1918 3083 c-94 -101 -202 -295 -260 -467 -28 -81 -31 -104 -32 -206 0 -95 4 -125 22 -171 44 -111 110 -177 221 -221 47 -19 76 -22 186 -22 125 -1 132 0 195 30 114 54 181 128 220 245 18 54 21 81 18 169 -3 93 -7 113 -34 170 -18 36 -47 83 -67 106 -40 45 -132 99 -189 109 -21 4 -38 10 -38 14 0 13 132 171 171 205 l41 35 -33 5 c-30 5 -361 46 -372 46 -2 0 -24 -21 -49 -47z"/><path d="M2897 3050 c-110 -139 -206 -329 -248 -492 -28 -107 -23 -243 12 -331 58 -149 208 -237 405 -237 133 0 233 39 316 121 86 86 124 202 115 347 -4 66 -11 96 -39 155 -55 114 -133 181 -248 210 l-50 13 63 79 c35 44 85 99 111 122 l47 42 -33 5 c-45 7 -362 46 -376 46 -7 0 -40 -36 -75 -80z"/></g></svg>
                    <p>Artur Roscolotenco</p>
                </div>
            </div>

            <!-- #2 -->
            <div class="block">
                <div class="top-block">
                    <svg class="prevBtn" version="1.0" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M3445 4611 c-28 -13 -343 -322 -1012 -992 -871 -873 -973 -978 -983 -1016 -25 -98 -86 -31 983 -1102 733 -734 983 -978 1016 -993 89 -41 194 10 220 108 24 90 72 37 -922 1032 l-912 912 912 913 c786 787 913 917 922 952 27 100 -58 206 -164 205 -11 0 -38 -9 -60 -19z"/></g></svg>
                    <span>"Real is right! Deliciously authentic food, great grocery selection, pleasant staff, and very reasonable prices! Love it!"</span>
                    <svg class="nextBtn" version="1.0" xmlns="http://www.w3.org/2000/svg"  width="32px" height="32px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1545 4616 c-72 -32 -116 -121 -96 -193 9 -31 171 -198 923 -950 l913 -913 -911 -912 c-716 -716 -914 -921 -923 -949 -26 -83 38 -189 124 -205 91 -17 40 -62 1102 999 881 881 983 986 993 1025 25 97 86 30 -983 1101 -669 670 -984 979 -1012 992 -47 22 -88 23 -130 5z"/></g></svg>
                </div>

                <div class="sub-block">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1918 3083 c-94 -101 -202 -295 -260 -467 -28 -81 -31 -104 -32 -206 0 -95 4 -125 22 -171 44 -111 110 -177 221 -221 47 -19 76 -22 186 -22 125 -1 132 0 195 30 114 54 181 128 220 245 18 54 21 81 18 169 -3 93 -7 113 -34 170 -18 36 -47 83 -67 106 -40 45 -132 99 -189 109 -21 4 -38 10 -38 14 0 13 132 171 171 205 l41 35 -33 5 c-30 5 -361 46 -372 46 -2 0 -24 -21 -49 -47z"/><path d="M2897 3050 c-110 -139 -206 -329 -248 -492 -28 -107 -23 -243 12 -331 58 -149 208 -237 405 -237 133 0 233 39 316 121 86 86 124 202 115 347 -4 66 -11 96 -39 155 -55 114 -133 181 -248 210 l-50 13 63 79 c35 44 85 99 111 122 l47 42 -33 5 c-45 7 -362 46 -376 46 -7 0 -40 -36 -75 -80z"/></g></svg>
                    <p>Adriana Hoyos Cozma</p>
                </div>
            </div>

            <!-- #3 -->
            <div class="block">
                <div class="top-block">
                    <svg class="prevBtn" version="1.0" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M3445 4611 c-28 -13 -343 -322 -1012 -992 -871 -873 -973 -978 -983 -1016 -25 -98 -86 -31 983 -1102 733 -734 983 -978 1016 -993 89 -41 194 10 220 108 24 90 72 37 -922 1032 l-912 912 912 913 c786 787 913 917 922 952 27 100 -58 206 -164 205 -11 0 -38 -9 -60 -19z"/></g></svg>
                    <span>"Mulțumim Krud pentru felul în care ne-ați găzduit! Mâncarea a fost delicioasă, serviciul ireproșabil și ambianța deosebită!"</span>
                    <svg class="nextBtn" version="1.0" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1545 4616 c-72 -32 -116 -121 -96 -193 9 -31 171 -198 923 -950 l913 -913 -911 -912 c-716 -716 -914 -921 -923 -949 -26 -83 38 -189 124 -205 91 -17 40 -62 1102 999 881 881 983 986 993 1025 25 97 86 30 -983 1101 -669 670 -984 979 -1012 992 -47 22 -88 23 -130 5z"/></g></svg>
                </div>

                <div class="sub-block">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1918 3083 c-94 -101 -202 -295 -260 -467 -28 -81 -31 -104 -32 -206 0 -95 4 -125 22 -171 44 -111 110 -177 221 -221 47 -19 76 -22 186 -22 125 -1 132 0 195 30 114 54 181 128 220 245 18 54 21 81 18 169 -3 93 -7 113 -34 170 -18 36 -47 83 -67 106 -40 45 -132 99 -189 109 -21 4 -38 10 -38 14 0 13 132 171 171 205 l41 35 -33 5 c-30 5 -361 46 -372 46 -2 0 -24 -21 -49 -47z"/><path d="M2897 3050 c-110 -139 -206 -329 -248 -492 -28 -107 -23 -243 12 -331 58 -149 208 -237 405 -237 133 0 233 39 316 121 86 86 124 202 115 347 -4 66 -11 96 -39 155 -55 114 -133 181 -248 210 l-50 13 63 79 c35 44 85 99 111 122 l47 42 -33 5 c-45 7 -362 46 -376 46 -7 0 -40 -36 -75 -80z"/></g></svg>
                    <p>Cristina Turbatu</p>
                </div>
            </div>

            <!-- #4 -->
            <div class="block">
                <div class="top-block">
                    <svg class="prevBtn" version="1.0" xmlns="http://www.w3.org/2000/svg" width="39px" height="39px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M3445 4611 c-28 -13 -343 -322 -1012 -992 -871 -873 -973 -978 -983 -1016 -25 -98 -86 -31 983 -1102 733 -734 983 -978 1016 -993 89 -41 194 10 220 108 24 90 72 37 -922 1032 l-912 912 912 913 c786 787 913 917 922 952 27 100 -58 206 -164 205 -11 0 -38 -9 -60 -19z"/></g></svg>
                    <span>"Printre puținele restaurante de "fain" dining din Iași. Ingredientele sunt de calitate iar staff-ul este foarte profesionist. Recomand carnea de vită maturată! "</span>
                    <svg class="nextBtn" version="1.0" xmlns="http://www.w3.org/2000/svg" width="39px" height="39px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1545 4616 c-72 -32 -116 -121 -96 -193 9 -31 171 -198 923 -950 l913 -913 -911 -912 c-716 -716 -914 -921 -923 -949 -26 -83 38 -189 124 -205 91 -17 40 -62 1102 999 881 881 983 986 993 1025 25 97 86 30 -983 1101 -669 670 -984 979 -1012 992 -47 22 -88 23 -130 5z"/></g></svg>
                </div>

                <div class="sub-block">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1918 3083 c-94 -101 -202 -295 -260 -467 -28 -81 -31 -104 -32 -206 0 -95 4 -125 22 -171 44 -111 110 -177 221 -221 47 -19 76 -22 186 -22 125 -1 132 0 195 30 114 54 181 128 220 245 18 54 21 81 18 169 -3 93 -7 113 -34 170 -18 36 -47 83 -67 106 -40 45 -132 99 -189 109 -21 4 -38 10 -38 14 0 13 132 171 171 205 l41 35 -33 5 c-30 5 -361 46 -372 46 -2 0 -24 -21 -49 -47z"/><path d="M2897 3050 c-110 -139 -206 -329 -248 -492 -28 -107 -23 -243 12 -331 58 -149 208 -237 405 -237 133 0 233 39 316 121 86 86 124 202 115 347 -4 66 -11 96 -39 155 -55 114 -133 181 -248 210 l-50 13 63 79 c35 44 85 99 111 122 l47 42 -33 5 c-45 7 -362 46 -376 46 -7 0 -40 -36 -75 -80z"/></g></svg>
                    <p>Ștefan Dominte</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Блок для бронирования -->
    <div class="booking">
        <div class="booking-text">
            <h2>Rezervări</h2>
            <p>Strada Dimitrie Ralet 1, Iași</p>
            <p>+40 771 103.904</p>
            <p>Orar 12:00 - 23:00</p>

            <a href="">Rezervă o masă</a>
        </div>
        <div class="map" id="map">

        </div>
    </div>
@endsection