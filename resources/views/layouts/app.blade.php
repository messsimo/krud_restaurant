<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Подключаем CSS файл Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    
    <title>@yield("title")</title>
</head>
<body>
    <!-- Подключение секций -->
    @yield("main")

    <!-- Подключение JavaScript -->
    <script src="{{ asset('js/slider-review.js') }}"></script>

    <!-- Подключаем JS файл Leaflet -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
    // Создаем карту и настраиваем её центр и масштаб
    var map = L.map('map').setView([47.155445,27.595572], 13);

    // Добавляем слой карты с OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Добавляем маркер на карту
    var marker = L.marker([47.155445,27.595572]).addTo(map)
        .bindPopup('Your location')
        .openPopup();
</script>
</body>
</html>