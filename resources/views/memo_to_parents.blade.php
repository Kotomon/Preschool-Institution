@extends('sample') <!-- копирует код из sample     -->
@section('main_information')
    <!-- вставляется код ниже   -->
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Условия приема и питание в детском саду «Поросенок», программа и цена. Проведите пробный день в детском саду!">
<title>Детский сад «Поросенок» – Условия приема, питание, программа и цена для родителей. Пробный день в детском саду.</title>
    <link rel="stylesheet" href="{{ asset('public/css/memo_to_parents.css') }}">
    </head>
    <div class="memo_parents">
        <h1>Пробный день</h1>
        <section>
            <div class="introdaction">
                <div class="introdaction_img">
                    <img src="{{ asset('public/images/devochka2.jpg') }}" alt="">
                </div>
                <div class="introdaction_text">
                    <p>Если Вы выбираете детский сад для своего малыша, то мы поможем Вам!</p>

                    <p>Предлагаем Вашему ребенку провести пробный день в детском саду «Поросенок»!</p>

                    <p>В этот день Ваш ребенок может провести в детском саду половину дня (с 09:00 до 13:30).

                        С собой необходимо иметь сменную обувь и пижаму.

                        Необходимо предварительно записаться по телефону 8(999)999-99-99.

                        Пробный день возможен в любой рабочий день.</p>
                </div>
            </div>
        </section>
        <div class="centered">
            <hr class="line"/>
            <i class="material-icons">&#xe430;</i>
            <hr class="line"/>
        </div>
        <h2>Условия приема</h2>
        <section>
            <div class="introdaction">
                <div class="introdaction_text">
                    <p>Чтобы стать воспитанником нашего детского сада, необходимо заполнить форму заявки на поступление
                        <a href="{{ Route('Main') }}#section">Заявка</a>
                    </p>

                    <p>Для оформления ребёнка в детский сад необходимы следующие документы:</p>
                    <div class="spisok">
                        <ul>
                            <li>заявление родителей;</li>
                            <li>согласие на обработку персональных данных;</li>
                            <li>согласие на работу с педагогом-психологом;</li>
                            <li>копия свидетельства о рождении;</li>
                            <li>СНИЛС ребёнка;</li>
                            <li>копия медицинского полиса;</li>
                            <li>медицинская карта;</li>
                            <li>заключение психолого-педагогической комиссии (для логопедической группы);</li>
                            <li>копия паспорта одного из родителей;</li>
                            <li>справка о многодетности (для многодетных семей);</li>
                            <li>договор (заключается по месту оформления).</li>
                        </ul>
                    </div>
                </div>
                <div class="introdaction_img">
                    <img src="{{ asset('public/images/documents.jpg') }}" alt="">
                </div>
            </div>
            <div class="centered">
                <hr class="line"/>
                <i class="material-icons">&#xe430;</i>
                <hr class="line"/>
            </div>
            <h2>Питание</h2>
            <section>
                <div class="introdaction">
                    <div class="introdaction_img">
                        <img src="{{ asset('public/images/povar.png') }}" alt="">
                    </div>
                    <div class="introdaction_text">
                        <p>В детском саду «Поросенок» организовано четырехразовое питание. В приготовлении блюд
                            используются
                            только самые свежие продукты.</p>
                        <p>Для наших детей готовят профессиональные повара, которые соблюдают все предписанные
                            санитарно-эпидемиологические нормы.</p>
                        <p>Проводится постоянное мытье посуды. Дезинфицируются все тарелки, столовые приборы, стаканы и
                            чашки.</p>
                        <p>Наши блюда выглядят эстетически красивыми, а самое главное — они очень полезные.</p>
                        <p>Проводятся мастер-классы по готовке для юных поваров, которые ведут повара с мировым
                            именем.</p>
                    </div>
                </div>
            </section>
            <div class="centered">
                <hr class="line"/>
                <i class="material-icons">&#xe430;</i>
                <hr class="line"/>
            </div>
            <h2>Программа и цена</h2>
            <div class="accordion-container">
                <button class="accordion">"РАННЕЕ РАЗВИТИЕ" (для детей от 1 до 3 лет)</button>
                <div class="panel">
                    <p> - Занятия по развитию моторики, речи и координации;<br> - Игровые занятия на английском языке.</p>
                    <p>Стоимость: 15 000 рублей в месяц</p>
                </div>
                <button class="accordion">"ПОДГОТОВКА К ШКОЛЕ" (для детей от 4 до 6 лет)</button>
                <div class="panel">
                    <p> - Занятия по развитию навыков чтения и письма на английском языке;<br> - Занятия английским языком с носителем.</p>
                    <p>Стоимость: 30 000 рублей в месяц</p>
                </div>
            </div>
    </div>
    <br>
    <script src="{{ asset('public/js/memo_to_parents.js') }}"></script>
@endsection('main_information')
