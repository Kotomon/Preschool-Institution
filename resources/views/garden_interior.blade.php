@extends('sample')
@section('main_information')
<head>
     <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Галерея изображений детского сада «Поросенок»".>
<title>Галерея детского сада «Поросенок».</title>
    <link rel="stylesheet" href="{{ asset('public/css/garden_interior.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <br>
    <br>
    <div id="gallery">
        <div class="tabs">
            <ul class="tab-links">
                <li class="active"><a href="#all">Некоторые</a></li>
                <li><a href="#nature">Игра - это полезно</a></li>
                <li><a href="#architecture">Листья сыплются дождем</a></li>
                <li><a href="#food">Учись веселиться</a></li>
            </ul>
            <div class="tab-content">
                <div id="all" class="tab active">
                    <div class="gallery-container">
                        <div class="gallery-item"><img src="{{ asset('public/images/Nature1.jpg') }}" alt="Nature image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/Architecture1.jpg') }}" alt="Architecture image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/food1.jpg') }}" alt="Food image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/Nature2.jpg') }}" alt="Nature image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/Architecture2.jpg') }}" alt="Architecture image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/food2.jpg') }}" alt="Food image"></div>
                    </div>
                </div>
                <div id="nature" class="tab">
                    <div class="gallery-container">
                        <div class="gallery-item"><img src="{{ asset('public/images/Nature1.jpg') }}" alt="Nature image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/Nature2.jpg') }}" alt="Nature image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/Nature3.jpg') }}" alt="Nature image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/Nature4.jpg') }}" alt="Nature image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/Nature5.jpg') }}" alt="Nature image"></div>
                    </div>
                </div>
                <div id="architecture" class="tab">
                    <div class="gallery-container">
                        <div class="gallery-item"><img src="{{ asset('public/images/Architecture1.jpg') }}" alt="Architecture image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/Architecture2.jpg') }}" alt="Architecture image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/Architecture3.jpg') }}" alt="Architecture image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/Architecture4.jpg') }}" alt="Architecture image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/Architecture5.jpg') }}" alt="Architecture image"></div>
                    </div>
                </div>
                <div id="food" class="tab">
                    <div class="gallery-container">
                        <div class="gallery-item"><img src="{{ asset('public/images/food1.jpg') }}" alt="Food image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/food2.jpg') }}" alt="Food image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/food3.jpg') }}" alt="Food image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/food4.jpg') }}" alt="Food image"></div>
                        <div class="gallery-item"><img src="{{ asset('public/images/food5.jpg') }}" alt="Food image"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="lightbox">
            <div class="lightbox-container">
                <button class="close"></button>
                <img src="" alt="Full screen image">
            </div>
        </div>
    </div>
    <script src="{{ asset('public/js/garden_interior.js')}}"></script>
  @endsection('main_information')
