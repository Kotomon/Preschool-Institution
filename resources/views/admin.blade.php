<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('admin.authenticate') }}" method="POST">
        @csrf
        <div>
            <label for="login">Логин</label>
            <input type="text" name="login" id="login">
        </div>
        <div>
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">
        </div>
    
        <button type="submit">Войти</button>
    </form>
</body>
</html>
