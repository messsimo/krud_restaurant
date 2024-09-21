<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link rel="stylesheet" href="{{ asset('css/delivery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

    <!-- Подключение CSS файл Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    
    <title>@yield("title")</title>
</head>
<body>
    <!-- Подключение секций -->
    @yield("main")
    @yield("booking")
    @yield("delivery")
    @yield("dishes")
    @yield("infoDish")
    @yield("menu")

    <!-- Подключение блока с футером -->
    @extends("blocks.footer")

    <!-- Подключение JavaScript -->
    <script src="{{ asset('js/slider-review.js') }}"></script>

    <!-- Подключение JS файл Leaflet -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
    // Карта с координатами
    var map = L.map('map').setView([47.155445,27.595572], 13);

    // Слой карты от OSM
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Маркер по координатам на карте
    var marker = L.marker([47.155445,27.595572]).addTo(map)
        .bindPopup('Krud Restaurant')
        .openPopup();
</script>
</body>
</html>