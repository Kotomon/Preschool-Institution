<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <title>Регистрация</title>
</head>
<body>
    <form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.registration') }}">
        @csrf
        <div class="form-group">
            <label for="email" class="col-form-label-lg">email</label>
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
            <label for="last_name" class="col-form-label-lg">Фамилия</label>
            <input class="form-control" id="last_name" name="last_name" type="text" value="{{ old('last_name') }}" placeholder="Фамилия">
            @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="first_name" class="col-form-label-lg">Имя</label>
            <input class="form-control" id="first_name" name="first_name" type="text" value="{{ old('first_name') }}" placeholder="Имя">
            @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="patronymic" class="col-form-label-lg">Отчество</label>
            <input class="form-control" id="patronymic" name="patronymic" type="text" value="{{ old('patronymic') }}" placeholder="Отчество">
            @error('patronymic')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="age" class="col-form-label-lg">Возраст</label>
            <input class="form-control" id="age" name="age" type="number" value="{{ old('age') }}" placeholder="Возраст">
            @error('age')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
    </div>
    <div class="form-group">
        <label for="telephone" class="col-form-label-lg">Телефон</label>
        <input class="form-control" id="telephone" name="telephone" type="text" value="{{ old('telephone') }}" placeholder="Телефон">
        @error('telephone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="workplace" class="col-form-label-lg">Место работы</label>
        <input class="form-control" id="workplace" name="workplace" type="text" value="{{ old('workplace') }}" placeholder="Место работы">
        @error('workplace')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="additional_contact_for_communication" class="col-form-label-lg">Дополнительный контакт для связи</label>
        <input class="form-control" id="additional_contact_for_communication" name="additional_contact_for_communication" type="text" value="{{ old('additional_contact_for_communication') }}" placeholder="Дополнительный контакт">
        @error('additional_contact_for_communication')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="child_id" class="col-form-label-lg">ID ребенка</label>
        <input class="form-control" id="child_id" name="child_id" type="text" value="{{ old('child_id') }}" placeholder="ID ребенка">
        @error('child_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="program" class="col-form-label-lg">Программа</label>
        <input class="form-control" id="program" name="program" type="text" value="{{ old('program') }}" placeholder="Программа">
        @error('program')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Зарегистрироваться</button>
    </div>
</form>
        <div class="form-group">
            <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Войти</button>
        </div>
    </form>
</body>
</html>
