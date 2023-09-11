@extends('sample')
@section('main_information')
<head>
    <title>Наши преподаватели - команда опытных, профессиональных и творческих педагогов | Детский сад "Поросенок"</title>
<meta name="description" content="Команда опытных, профессиональных, творческих и инициативных педагогов детского сада 'Поросенок'. Учителя и воспитатели, которые отлично владеют современными методиками, программами и технологиями обучения детей разных возрастов. Радостное и сложное занятие быть педагогом, но наши преподаватели справляются и делают это с любовью.">
    <link rel="stylesheet" href="{{ asset('public/css/our_employees.css') }}">
    </head>
    <div class="employees">
        <div class="text">
        <h1>НАШИ ПРЕПОДАВАТЕЛИ — Квалифицированные учителя и воспитатели</h1>
            <div class="centered">
                <hr class="line"/>
                <i class="material-icons">&#xe430;</i>
                <hr class="line"/>
            </div>
        <p>Как воспитывать детей знает каждый, за исключением тех, у кого они есть</p>
        <b> Коллектив детского сада «Поросенок» - это команда опытных, профессиональных, творческих, инициативных
            педагогов, отлично владеющих современными методиками, программами и технологиями. Работать с детьми может
            только человек, понимающий и любящий ребенка.</b>
            <div class="centered">
                <hr class="line"/>
                <i class="material-icons">&#xe430;</i>
                <hr class="line"/>
            </div>
        <p>Сложно быть педагогом…</p>
        <b>сложно и радостно. Огромное удовольствие видеть уверенных, дружных, сосредоточенных,
            самостоятельных, любознательных, веселых и счастливых детей. Общение с понимающими, заинтересованными,
            довольными и доверяющими нам родителями – окрыляет и вдохновляет.</b>
        <b> Только в сотрудничестве всех участников процесса образования «педагог – ребенок - семья» возможно
            эффективное развитие и достижение цели. «Любовь – это когда ничего не стыдно, ничего не страшно. </b>
            <div class="centered">
                <hr class="line"/>
                <i class="material-icons">&#xe430;</i>
                <hr class="line"/>
            </div>
        <p>ЛУЧШИЕ ПРОФЕССИОНАЛЬНЫЕ ПРЕПОДАВАТЕЛИ</p>
        </div>
        <div class="row">
            @foreach ($bbs as $section )
                <div class="col-md-4">
                    <div class="card d-flex flex-row justify-content-center align-items-center">
                        <div class="image-wrapper mr-3">
                            <img src="{{ asset('public/images').'/'. $section->photo }}" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $section->full_name }}</h5>
                            <p class="card-text">{{ $section->post }}</p>
                            <button class="btn btn-sm btn-info btn-show-comment">Подробнее</button>
                            <p class="card-comment" style="display: none;">Характер:{{ $section->personality }}</p>
                            <p class="card-comment" style="display: none;">Место получения высшего образования:{{ $section->comment }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    <script src="{{ asset('public/js/employees.js') }}"></script>
@endsection('main_information')
