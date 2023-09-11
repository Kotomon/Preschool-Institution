<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial=scale=1">
    <meta name="description" content="Страница входа в личный кабинет частного детского сада «Поросенок». Введите свой email и пароль для входа.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Вход в личный кабинет - частный детский сад «Поросенок».</title>
    <!-- Styles -->
    <link href="{{ asset('public/css/login.css') }}" rel="stylesheet">
</head>
<body>
<h1>Вход</h1>
<form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.login') }}">
    @csrf
    <div class="form-group">
        <label for="email" class="col-form-label-lg">Ваш email</label>
        <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class="col-form-label-lg">Пароль</label>
        <input class="form=control" id="password" name="password" type="password" value="" placeholder="Пароль">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Войти</button>
    </div>
</form>
</body>
