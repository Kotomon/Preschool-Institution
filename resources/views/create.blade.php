@extends('sample')
@section('main_information')
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Обратная связь частного детского сада «Поросенок». Задайте вопросы, оставьте отзывы и предложения.">
<title>Обратная связь - частный детский сад «Поросенок». Задайте вопросы, оставьте отзывы и предложения.</title>
    <link rel="stylesheet" href="{{ asset('public/css/create.css') }}">
    </head>
    <div class="text">
        <h1>Обратная связь</h1>
    <p>Мы очень рады, что Вы заинтересовались нашим частным детским садом "Поросенок"! Мы всегда готовы выслушать и учесть все Ваши пожелания и замечания, чтобы наши маленькие ученики получают только лучшие условия для развития и обучения.</p>
<p>Если у Вас есть какие-либо вопросы, предложения или же просто хотите поделиться своим опытом посещения нашего детского сада, то Вы можете заполнить форму обратной связи на нашем сайте. Мы обязательно рассмотрим все Ваши сообщения и постараемся ответить на них в кратчайшие сроки.</p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3>Свяжитесь с нами</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ url('/feedback') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Имя</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Введите ваше имя" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Введите ваш email" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Сообщение</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Введите ваше сообщение" rows="5" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg">Отправить сообщение</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<p>Наша команда воспитателей и педагогов всегда рада помочь родителям в выборе оптимальной программы обучения и заботится о том, чтобы каждый ребенок чувствовал себя комфортно и уверенно в нашем детском саду.
</p>
<p>Мы благодарим Вас за проявленный интерес к нашей работе и готовы ответить на все Ваши вопросы и предложения!</p>
    </div>
    @endsection('main_information')
