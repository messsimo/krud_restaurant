<!-- Секция футера -->
@section("footer")
<footer>
    <nav>
        <a href="/">Acasă</a>
        <a href="{{ route('booking') }}">Rezervări</a>
        <a href="{{ route('delivery') }}">Livrări</a>
        <a href="{{ route('menu') }}">Meniu</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <div class="socials">
        <a href="https://www.facebook.com/Krud.Romania">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" fill="#949494" width="64.000000pt" height="64.000000pt" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M331 623 c-54 -28 -73 -62 -79 -142 l-5 -70 -46 -3 -46 -3 -3 -57 -3 -58 51 0 50 0 0 -145 0 -145 60 0 60 0 0 145 0 145 49 0 48 0 7 46 c10 76 11 74 -49 74 l-55 0 0 49 c0 58 10 69 70 73 l45 3 0 50 0 50 -60 3 c-42 2 -70 -3 -94 -15z"/></g></svg>
        </a>
        <a href="https://www.youtube.com/@krud.romania">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="64.000000pt" height="64.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1920 4489 c-450 -10 -1000 -37 -1136 -55 -188 -24 -319 -80 -446 -191 -133 -114 -206 -245 -262 -470 -55 -220 -71 -488 -71 -1213 0 -859 25 -1147 121 -1387 111 -276 317 -429 644 -477 167 -24 333 -35 840 -52 811 -27 1688 -20 2423 21 381 22 456 34 591 101 182 91 302 229 377 436 93 252 113 500 113 1358 0 826 -22 1108 -103 1344 -89 256 -267 426 -523 500 -108 31 -224 43 -608 61 -665 32 -1295 39 -1960 24z m1222 -299 c570 -14 1138 -44 1233 -66 84 -20 144 -49 211 -102 65 -51 106 -116 143 -227 68 -204 86 -469 85 -1255 0 -817 -19 -1037 -105 -1260 -63 -165 -177 -255 -363 -291 -63 -12 -489 -35 -906 -50 -424 -14 -1232 -15 -1680 0 -908 29 -1056 47 -1199 142 -80 53 -126 118 -167 237 -70 203 -89 468 -89 1242 0 766 18 1018 87 1223 38 114 66 163 126 219 118 111 196 133 542 153 650 38 1397 50 2082 35z"/><path d="M2034 3416 c-46 -21 -100 -81 -113 -129 -9 -30 -11 -221 -9 -699 l3 -656 30 -44 c43 -60 105 -93 177 -92 54 1 76 11 640 314 320 172 596 323 611 334 47 34 79 98 79 158 1 69 -20 117 -68 157 -22 18 -248 147 -504 288 -723 396 -698 383 -761 383 -30 -1 -68 -7 -85 -14z m631 -594 c193 -106 359 -197 368 -204 15 -11 -39 -43 -398 -235 -228 -123 -417 -223 -420 -223 -3 0 -5 205 -5 456 l0 456 53 -30 c28 -16 210 -115 402 -220z"/></g></svg>
        </a>
        <a href="https://www.instagram.com/krud.romania/">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="64.000000pt" height="64.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1609 5110 c-330 -14 -556 -56 -747 -138 -179 -77 -285 -148 -417 -279 -178 -177 -289 -376 -359 -643 -62 -236 -76 -507 -76 -1490 0 -967 13 -1241 71 -1477 144 -587 574 -961 1207 -1048 181 -24 561 -35 1287 -35 675 0 1064 10 1239 31 358 42 638 166 859 378 249 240 381 527 429 936 19 160 19 2294 0 2445 -39 306 -130 558 -274 751 -71 96 -223 241 -318 306 -215 145 -474 225 -815 254 -161 13 -1813 20 -2086 9z m2163 -483 c285 -42 445 -113 599 -266 100 -100 155 -188 204 -324 82 -230 90 -352 90 -1482 0 -651 -4 -964 -13 -1069 -29 -347 -98 -534 -260 -707 -169 -180 -380 -269 -707 -299 -177 -17 -1640 -25 -1977 -11 -152 6 -311 16 -354 22 -189 26 -372 93 -486 176 -71 53 -185 177 -227 247 -84 140 -134 337 -151 587 -30 454 -20 2012 14 2270 36 267 119 447 276 599 172 167 398 248 748 270 76 4 587 7 1137 5 853 -2 1016 -4 1107 -18z"/><path d="M3802 4200 c-113 -57 -167 -145 -167 -275 0 -94 22 -150 86 -214 64 -63 120 -86 214 -86 67 0 89 4 137 28 101 50 158 137 166 253 7 103 -16 163 -87 235 -66 66 -124 89 -221 89 -54 0 -78 -6 -128 -30z"/><path d="M2336 3854 c-263 -48 -496 -171 -692 -368 -260 -259 -385 -562 -385 -926 0 -220 41 -401 132 -583 280 -556 896 -841 1495 -692 236 59 418 161 595 332 159 154 266 322 333 523 48 145 66 257 66 420 0 162 -18 275 -65 417 -64 192 -157 344 -302 494 -198 204 -445 336 -717 384 -111 19 -352 19 -460 -1z m396 -458 c458 -88 762 -538 674 -999 -54 -279 -259 -527 -521 -628 -128 -50 -202 -62 -350 -56 -105 4 -146 10 -215 32 -303 96 -524 341 -586 649 -24 119 -15 304 21 416 94 298 345 525 644 585 89 18 243 18 333 1z"/></g></svg>
        </a>
        <a href="https://www.tripadvisor.com/Restaurant_Review-g304060-d13206541-Reviews-Krud_Restaurant_Braserie-Iasi_Iasi_County_Northeast_Romania.html">
            <svg version="1.0" xmlns="://www.w3.org/2000/svg" width="64.000000pt" height="64.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M2410 4214 c-192 -21 -250 -30 -345 -51 -317 -70 -630 -218 -867 -410 l-77 -63 -555 0 -555 0 145 -230 c80 -127 147 -236 149 -243 3 -6 -21 -48 -53 -93 -108 -151 -187 -334 -228 -529 -28 -131 -25 -383 4 -522 100 -468 435 -850 878 -1004 273 -95 602 -97 868 -7 189 64 365 170 508 307 l47 44 19 -44 c11 -24 59 -134 106 -244 48 -110 90 -203 94 -207 5 -5 23 27 41 70 18 42 67 154 108 249 l75 172 82 -71 c148 -129 288 -211 466 -271 150 -51 268 -70 440 -70 488 1 921 256 1169 688 83 145 136 302 162 484 16 113 6 349 -20 462 -39 170 -129 372 -222 496 -21 29 -39 57 -39 63 0 6 66 115 146 243 81 127 149 238 151 244 4 10 -112 13 -562 13 l-567 0 -54 49 c-75 68 -221 168 -334 229 -218 116 -449 189 -715 228 -99 14 -398 26 -465 18z m464 -318 c203 -35 374 -90 540 -173 l100 -50 -75 -18 c-94 -23 -212 -66 -292 -106 -188 -96 -404 -287 -513 -455 -84 -131 -84 -131 -90 -117 -3 6 -31 51 -64 100 -64 98 -167 216 -251 289 -153 131 -372 244 -552 284 -32 8 -60 17 -63 21 -7 12 194 105 321 147 125 42 276 76 405 92 104 12 427 4 534 -14z m-1260 -536 c464 -125 786 -541 786 -1016 0 -400 -227 -765 -585 -939 -129 -64 -219 -90 -361 -107 -297 -34 -615 78 -836 295 -269 263 -377 647 -285 1008 97 377 399 675 772 762 109 26 111 26 275 22 118 -3 174 -9 234 -25z m2397 1 c381 -103 661 -385 760 -764 27 -104 37 -306 19 -415 -115 -718 -897 -1105 -1538 -761 -602 323 -734 1143 -264 1641 148 156 332 259 552 309 115 26 358 21 471 -10z"/><path d="M1172 3030 c-233 -61 -421 -241 -500 -478 -22 -67 -26 -94 -26 -207 0 -140 12 -199 64 -306 91 -188 241 -315 450 -380 59 -18 99 -23 185 -24 128 0 190 13 300 65 247 115 399 338 413 606 6 130 -14 227 -75 354 -85 177 -262 320 -459 370 -102 26 -252 26 -352 0z m350 -317 c138 -65 227 -195 236 -343 7 -126 -28 -219 -117 -313 -88 -93 -228 -140 -350 -119 -217 38 -365 221 -348 432 12 164 105 289 264 356 50 21 71 24 153 22 83 -3 104 -7 162 -35z"/><path d="M1280 2478 c-107 -55 -112 -197 -10 -265 95 -65 234 10 234 124 -1 125 -115 197 -224 141z"/><path d="M3592 3035 c-139 -30 -299 -132 -394 -249 -102 -127 -151 -270 -152 -441 -1 -131 16 -204 76 -325 58 -120 186 -247 308 -308 118 -59 193 -76 325 -76 127 0 202 18 311 71 186 90 337 281 379 479 95 450 -240 867 -694 863 -53 0 -124 -7 -159 -14z m284 -302 c130 -43 225 -140 269 -272 27 -83 18 -207 -22 -292 -120 -257 -458 -316 -659 -115 -218 218 -132 572 165 681 52 19 187 18 247 -2z"/><path d="M3692 2483 c-147 -72 -96 -293 68 -293 162 0 214 216 70 290 -47 24 -93 25 -138 3z"/></g></svg>
        </a>
    </div>

    <div class="info">
        <p>+40 (0)771 103.904</p>
        <p>hello@krud.ro</p>
        <span>Strada Dimitrie Ralet 1</span>
        <span>Iași</span>
        <span>700108</span>
        <span>Powered by myself</span>
    </div>
</footer>