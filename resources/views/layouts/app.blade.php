<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    <title>@yield("title")</title>
</head>
<body>
    <!-- Подключение секций -->
    @yield("main")

    <!-- Подключение JavaScript -->
    <script src="{{ asset('js/slider-review.js') }}"></script>
</body>
</html>