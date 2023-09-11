@extends('sample')<!-- копирует код из sample     -->
@section('main_information')
    <!-- вставляется код ниже   -->
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Частный детский сад &quot;Поросенок&quot; во Владивостоке предлагает международное образование для детей от 3 до 6 лет. Профессиональные педагоги носители языка находят ключ для талантов каждого ребенка. Развивайте академические знания и творческие способности вашего ребенка вместе с нами!">
<meta name="keywords" content="детский сад, Владивосток, международное образование, педагоги носители языка, уроки английского, подготовка к школе, дополнительные занятия для детей, комфортная адаптация, образовательный путь, подвижные занятия">
<title>Частный детский сад "Поросенок" во Владивостоке – международное образование для детей от 3 до 6 лет</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-uZbWZ+EZfSyWk4qh2xzeT4Wj/clVet5LK8BV1RNxzLxCQbke4//G+Ufu25sbCTuLG2/mjNPqL8wn/aIgqbtfQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('public/css/main.blade.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" type="favicon/ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <div class="main_blade">
        <div class="baner">
            <img src="{{ asset('public/images/bg-main-optimize.png') }}" alt="block">
            <div class="content">
                <h1>Добро пожаловать в частный детский сад!!!</h1>
                <b>"Поросенок"</b>
            </div>
        </div>
        <div class="text">
            <h2>Частный детский сад "Поросенок" открыл свои двери в 2020 году для всех, кто хочет
                предоставить
                международное образование для детей. Профессиональные педагоги носители языка находят ключ к талантам
                каждого ребенка. Счастливое детство, наполненное приключениями – это приоритет нашей школы.</h2>
            <div class="moreText">
                <h3>На что обратить внимание при выборе детского сада?</h3>
                <ul>
                    <li>
                        Английская программа в соответствии с британскими стандартами (National Curriculum for England).
                        Детский сад "Поросенок" предлагает одну из <strong>самых сильных академических программ во
                            Владивостоке</strong> для
                        детей от 3 до 6 лет.
                    <li>
                        <strong>Подготовка к школе</strong> в России осуществляется в полном объеме с использованием
                        современных
                        материалов.
                    </li>
                    <li>
                        <strong>Дополнительные занятия для детей</strong> от года до 6 лет ведутся у нас. Мы
                        уверены, что развивать творческую сторону личности также важно, как и интеллектуальную.
                    </li>
                    <li>
                        <strong>Комфортная адаптация в детском саду "Поросенок"</strong> происходит в течение первого
                        месяца при помощи
                        индивидуального помощника, который говорит как по-русски, так и по-английски.
                    </li>
                    <li>
                        <strong>Понятный образовательный путь.</strong> После наших детских садов ученики могут
                        поступить в любую школу
                        как в России, так и за границей.
                    </li>
                    <li>
                        <strong>Частный детский сад</strong> "Поросенок" принимает детей от года до 6 лет с
                        возможностью пребывания от 3
                        часов в день до полного дня. Каждый день дети усиливают свои академические знания: письмо,
                        чтение, математика и разговорная практика с носителем языка в каждой группе. Кроме этого,
                        расписание обогащено творческими и подвижными занятиями: живопись, спорт, музыка и многое
                        другое.
                    </li>
                </ul>
                <h3>Сколько стоит частный детский сад во Владивостоке?</h3>
                <p>Английский детский сад "Поросенок" открыл свои двери в 2020 году для всех, кто хочет предоставить
                    международное образование для детей. Профессиональные педагоги носители языка находят ключ к
                    талантам
                    каждого ребенка. Счастливое детство, наполненное приключениями – это приоритет нашей школы.

                    Разностороннее воспитание детей крайне сложно выразить в денежном эквиваленте. В "Поросенок"
                    стоимость
                    меняется в зависимости от длительности пребывания, типа программы и филиала, который Вы выбрали.
                    Неизменным остается высокий уровень педагогического состава, комфортные помещения для занятий и
                    самовыражения, уровень заботы, которым мы обеспечиваем каждого ученика. Когда вы приобретаете услугу
                    у
                    нас, Вы можете быть уверены, что мы нацелены на результат и комфорт Вашего ребенка.
                </p>
            </div>
        </div>
        <button class="read-more-btn">Читать далее</button>
        <div class="centered">
            <hr class="line"/>
            <i class="material-icons">&#xe430;</i>
            <hr class="line"/>
        </div>
        <section>
            <div class="our_services">
                <h2>Наши преимущества</h2>
                <div class="our_services_table">
                    <div class="our_services_section">
                        <i class="fa fa-check-circle"></i>
                        <div>
                            <p>обучение детей англискому языку</p>
                        </div>
                    </div>
                    <div class="our_services_section">
                        <i class="fa fa-check-circle"></i>
                        <p>гибкий график с 8:00 до 20:00</p>
                    </div>
                    <div class="our_services_section">
                        <i class="fa fa-check-circle"></i>
                        <p>всестороннее развитие и принятие личности</p>
                    </div>
                    <div class="our_services_section">
                        <i class="fa fa-check-circle"></i>
                        <p>забота о здоровье и безопасности </p>
                    </div>
                    <div class="our_services_section">
                        <i class="fa fa-check-circle"></i>
                        <p>семейная атмосфера - поддержка детей и родителей</p>
                    </div>
                    <div class="our_services_section">
                        <i class="fa fa-check-circle"></i>
                        <p>экологически чистые материалы в помещении детского сада</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="centered">
            <hr class="line"/>
            <i class="material-icons">&#xe430;</i>
            <hr class="line"/>
        </div>
        <div class="blockcontainer">
        <h2>Атмосфера свободы, творчества и развития – основа успешного обучения.</h2>
        <p><b>Убедитесь сами</b></p>
        <div class="container">
            <div class="left"><img src="{{ asset('public/images/lupa.png') }}" alt=""></div>
            <div class="right">
                <iframe src="https://www.youtube-nocookie.com/embed/Bxmcdk3XuQc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
        <div class="centered">
            <hr class="line"/>
            <i class="material-icons">&#xe430;</i>
            <hr class="line"/>
        </div>
                <div class="rew">
            <h2>Отзывы</h2>
            <div class="reviews-slider"> <!-- измененный элемент -->
                <div class="reviews-container"> <!-- измененный элемент -->
                    @foreach ($reviews as $review)
                        <div class="review-slide" id="review{{ $review->id }}">
                            <div class="review-text">
                                <p><b>"{{ $review->text }}"</b></p>
                                <p class="review-author">{{ $review->author_name }}</p>
                            </div>
                            <div class="review-image">
                                <img src="{{ asset('public/images').'/'. $review->image }}" alt="image">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="nav">
                <button class="prev"><i class="fa fa-chevron-left"></i></button>
                <button class="next"><i class="fa fa-chevron-right"></i></button>
            </div>
        </div>
        <div class="centered">
            <hr class="line"/>
            <i class="material-icons">&#xe430;</i>
            <hr class="line"/>
        </div>
        <section>
            <div class="reg_table">
                <h1>Хотите доверить нам своего ребенка ?</h1>
                <a id="section"></a>
                <h1>Заполните, пожалуйста, анкету, чтобы подать заявку на зачисление</h1>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session()->has('error'))
                        <div class="alert alert-error">{{ session('error') }}</div>
                    @endif
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h3>Анкета</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('Main')}}">
                                    @csrf
                                    <h1>Данные ребенка</h1>
                                    <div class="form-group">
                                        <label for="childs_name">Имя ребенка</label>
                                        <input type="text" class="form-control" id="name" name="childs_name" placeholder="Введите имя ребенка" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name_child">Фамилия ребенка</label>
                                        <input type="text" class="form-control" id="name" name="last_name_child" placeholder="Введите фамилию ребенка" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="child_birthday">Дата рождения</label>
                                        <input type="text" class="form-control" id="name" name="child_birthday" placeholder="Введите дату рождения ребенка" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Интересы ребенка</label>
                                        <textarea class="form-control" id="message" name="message" placeholder="Раскажите немного о вашем ребенке" rows="5"></textarea>
                                    </div>
                                    <h1>Ваши данные</h1>
                                    <div class="form-group">
                                        <label for="client_last_name">Ваша фамилия</label>
                                        <input type="text" class="form-control" id="name" name="client_last_name" placeholder="Введите вашу фамилию" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="client_first_name">Ваше имя</label>
                                        <input type="text" class="form-control" id="name" name="client_first_name" placeholder="Введите ваше имя" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="client_patronymic">Ваше отчество</label>
                                        <input type="text" class="form-control" id="name" name="client_patronymic" placeholder="Введите ваше отчество" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Введите ваш email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="dop_contact">Дополнительные контекты</label>
                                        <textarea class="form-control" id="message" name="dop_contact" placeholder="Напишите дополнительные контыкты для связи" rows="5"></textarea>
                                    </div>
                                    <input type="checkbox" name="subscribe" value="1">Я согласен на обработку своих персональных данных
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg">Отправить сообщение</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="centered">
            <hr class="line"/>
            <i class="material-icons">&#xe430;</i>
            <hr class="line"/>
        </div>
        <div class = "under">
        <p>Наш адрес: Российская Федерация, Приморский край,</p>
        <p>гор.Владивосток,</p>
        <p>Частный детский сад "Поросенок"</p>
        <p>телефон:8 (999) 999 99 84, 8 (999) 999 99 99,</p>
        <p> e-mail: <u>veresovden@mail.ru</u>;</p>
        </div>
    <script src="{{ asset('public/js/main.js') }}"></script>
@endsection('main_information')
