<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('public/css/sample.blade.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" type="favicon/ico">
</head>
<body>
<nav id="NavHeader">
    <div class="navigation">
        <div class="log">
            <a href="/login" class="button">Личный<br>кабинет</a>
        </div>
        <a href="{{ Route('Main') }}">Главная</a>
        <a href="{{ Route('AboutUs') }}">О нас</a>
        <a href="{{ Route('OurEmployees') }}">Наши сотрудники</a>
        <img src="{{ asset('public/images/logo.png') }}" alt="logo">
        <a href="{{ Route('Contact') }}">Контакты</a>
        <a href="{{ Route('MemoToParents') }}">Родителям</a>
        <a href="{{ Route('GardenInterior') }}">Галерея</a>
        <a href="{{ Route('create') }}">Обратная связь</a>
        <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
        <label class="burger" for="burger-checkbox"></label>
    </div>
    <div id="navPanel">
        <a href="{{ Route('Main') }}">Главная</a>
        <a href="{{ Route('AboutUs') }}">О нас</a>
        <a href="{{ Route('OurEmployees') }}">Наши сотрудники</a>
        <a href="{{ Route('Contact') }}">Контакты</a>
        <a href="{{ Route('MemoToParents') }}">Родителям</a>
        <a href="{{ Route('GardenInterior') }}">Галерея</a>
        <a href="{{ Route('create') }}">Обратная связь</a>
    </div>
</nav>
<div class="main_body" id="gridBody">
    <div class="main_body_text">
        @yield('main_information')
    </div>
</div>
</body>
</html>

<script src="{{ asset('public/js/script.js') }}"></script>
