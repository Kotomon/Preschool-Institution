<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Личный кабинет родителей детского сада "Поросенок". Персональное расписание дня и кружков вашего ребенка. Просмотр профиля своего ребенка и своих личных данных.">
<meta name="keywords" content="детский сад, поросенок, личный кабинет, расписание, кружки, профиль, родитель, личные данные">
    <link rel="stylesheet" href="{{  asset('public/css/private.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Личный кабинет | Детский сад "Поросенок"</title>
</head>
<body>
    <div class="private_head">
        <div class="private_head_text">
            <h1 class="private_lic">Личный кабинет</h1>
            <h1 class="private_hello">Добро пожаловать, {{ Auth::user()->first_name }} {{ Auth::user()->patronymic }}!</h1>
        </div>
        <div class="private_head_exit">
                <a href="/logout" class="button beer-button-blue">
                    <span class="glyphicon">&#xe163;</span>
                </a>
        </div>
    </div>
    @if (isset($alert))
    <div class ="alert_message">
        <div class="alert_massage_head">
            <p>Внимание!</p>
        </div>
        <div class="alert_message_body">
            <p>{{ $alert->alert}}</p>
        </div>
    </div>
    @endif
    <section>
        <div class="schedule_table">
            <div class="table_head">
                Расписание дня и кружков
            </div>
            @if (isset($program))
            <table>
                <tr>
                    <th class="table_color_2">Время</th>
                    <th class="table_color_1">Деятельность</th>
                </tr>
                <tr class="highlight">
                    <td class="table_color_2" data-label="Время">{{ $program->time1}}</td>
                    <td class="table_color_1" data-label="Деятельность">{{ $program->program1}}</td>
                </tr>
                <tr>
                    <td class="table_color_2" data-label="Время">{{ $program->time2}}</td>
                    <td class="table_color_1" data-label="Деятельность" >{{ $program->program2}}</td>
                </tr>
                <tr>
                    <td class="table_color_2" data-label="Время">{{ $program->time3}}</td>
                    <td class="table_color_1" data-label="Деятельность" >
                        <ul>
                            <li>{{ $program->program3}}</li>
                            <li>{{ $program->program4}}</li>
                            <li>{{ $program->program5}}</li>
                        </ul>
                    </td>
                </tr>
                <tr class="highlight">
                    <td class="table_color_2" data-label="Время">{{ $program->time4}}</td>
                    <td class="table_color_1" data-label="Деятельность" >{{ $program->program6}}</td>
                </tr>
                <tr>
                    <td class="table_color_2" data-label="Время">{{ $program->time5}}</td>
                    <td class="table_color_1" data-label="Деятельность" >{{ $program->program7}}</td>
                </tr>
                <tr class="highlight">
                    <td class="table_color_2" data-label="Время">{{ $program->time6}}</td>
                    <td class="table_color_1" data-label="Деятельность" >{{ $program->program8}}</td>
                </tr>
                <tr>
                    <td class="table_color_2" data-label="Время">{{ $program->time7}}</td>
                    <td class="table_color_1" data-label="Деятельность" >{{ $program->program9}}</td>
                </tr>
                <tr>
                    <td class="table_color_2" data-label="Время">{{ $program->time8}}</td>
                    <td class="table_color_1" data-label="Деятельность" >{{ $program->program10}}</td>
                </tr>
                </tr>
            </table>
            @endif
        </div>
    </section>
    <section>
        <div class="profile_container">
            <div></div>
            <div class="profile">
                <div class="child">
                    @if (isset($child))
                    <div class="profile_img">
                        <div class="photo">
                            @if ($child->photo)
                            <img src="{{ asset('public/images').'/'. $child->photo }}" alt="">
                            @else
                            <img src="{{ asset('images/blank-profile-picture.jpg') }}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="profile_text">
                        <p>Фамилия: {{ $child->last_name }}</p>
                        <p>Имя: {{ $child->first_name }}</p>
                        <p>Отчество: {{ $child->patronymic }}</p>
                        <p>Возраст: {{ $child->birthdate }}</p>
                        <p>Группа ребёнка: {{ $child->group }}</p>
                        <p>Немного об успеваемости ребенка:</p>
                        <p>{{ $child->comment }}</p>
                        <div class="button-container">
                        <button class="report-button" onclick="showReport()">Показать отчет</button>
                        </div>
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close" onclick="closeReport()">&times;</span>
                                <h2>Отчет об успеваемости</h2>
                                <p>Имя ребенка: {{ $child->first_name }}</p>
                                <p>Возраст: {{ $child->birthdate }}</p>
                                <p>Социально-эмоциональное развитие: {{ $child->social_and_emotional_development }}</p>
                                <p>Моторные навыки: {{ $child->motor_skills }}</p>
                                <p>Координация: {{ $child->coordination }}</p>
                                <p>Готовность к обучению: {{ $child->readiness_to_learn }}</p>
                                <p>Развитие речи: {{ $child->speech_development }}</p>
                                <p>Взаимодействие с другими детьми: {{ $child->interaction_with_other_children }}</p>
                                <p>Занятия на английском языке: {{ $child->classes_in_english }}</p>
                                <p>Рекомендации: {{ $child->recommendations }}</p>
                                <p class="highlight">(Информация меняется раз в неделю)</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="parent">
                    <div class="profile_img">
                        <div class="photo">
                            @if (Auth::user()->photo)
                            <img src="{{ asset('public/images').'/'.Auth::user()->photo }}" alt="">
                            @else
                            <img src="{{ asset('public/images/blank-profile-picture.jpg') }}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="profile_text">
                        <p>Фамилия:{{ Auth::user()->last_name }}</p>
                        <p>Имя:{{ Auth::user()->first_name }}</p>
                        <p>Отчество: {{ Auth::user()->patronymic }}</p>
                        <p>Возраст:{{ Auth::user()->age }}</p>
                        <p>Контактный телефон:{{ Auth::user()->first_name }}</p>
                        <p>Почта: {{ Auth::user()->email }}</p>
                        <p>Место работы:{{ Auth::user()->workplace }} </p>
                        <p>Дополнительные контакты для связи: </p>
                        <p>{{ Auth::user()->additional_contact_for_communication }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section></section>
        <div class="support">
            <h1>Нашли ошибку?</h1>
            <p>Просим связаться с нами по номеру - +7(999)-999-99-99</p>
            <p>Или написать нам: <a href="{{ Route('create') }}">Обратная связь</a></p>
        </div>
    </section>
</body>
</html>
<script src="{{ asset('public/js/private.js') }}"></script>
