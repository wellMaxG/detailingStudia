@extends('layouts.app')
@section('content')
@yield('main.content')

<section class="welcome-section">
    <x-alert-success />
    <h1>Добро пожаловать в нашу детейлинг-студию!</h1>
    <h3>"Дарите своему автомобилю новое дыхание с нами!"</h3>
    
    <div class="row align-items-start mt-5">
        <div class="col mt-4">
            <hr>
            <x-form-card style="height: 250px; overflow: hidden;">
                <x-form-card-header>
                    <x-form-card-title>
                        {{ __('ШИРОКИЙ СПЕКТР УСЛУГ') }}
                    </x-form-card-title>
                </x-form-card-header>
                <x-form-card-body>
                    <p>Предоставляем услуги от ремонта до детейлинга, поэтому ваш автомобиль станет не только исправным, но и эстетичным.</p>
                </x-form-card-body>
            </x-form-card>
        </div>
        
        <div class="col mt-4">  
            <hr>
            <x-form-card style="height: 250px; overflow: hidden;">
                <x-form-card-header>
                    <x-form-card-title>
                        {{ __('ПРЕМИАЛЬНЫЕ МАТЕРИАЛЫ') }}
                    </x-form-card-title>
                </x-form-card-header>
                <x-form-card-body >
                    <p>Мы выбираем только лучшие материалы, поскольку от этого напрямую зависит качество работы.</p>
                </x-form-card-body>
            </x-form-card>
        </div>
        
        <div class="col mt-4">
                <hr>
                <x-form-card style="height: 250px; overflow: hidden;">
                    <x-form-card-header>
                        <x-form-card-title>
                            {{ __('ГАРАНТИЯ КАЧЕСТВА') }}
                        </x-form-card-title>
                            </x-form-card-header>
                            <x-form-card-body>
                                <p>На ряд услуг и материалов распространяется гарантия.</p>
                            </x-form-card-body>
                    </x-form-card>
            </div>
          </div>
</section>



<section class="services-section">
    <h2>Наши работы</h2>
    <hr>        
        <div class="swiper mySwiper mb-3 col-10">

            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="backgrounds\11.jpg" alt="Slide 1">-<img src="backgrounds\2.jpg" alt="Slide 2"></div>
                <div class="swiper-slide"><img src="backgrounds\3.jpg" alt="Slide 3">-<img src="backgrounds\4.jpeg" alt="Slide 4"></div>
                <div class="swiper-slide"><img src="backgrounds\15.jpg" alt="Slide 5">-<img src="backgrounds\16.jpg" alt="Slide 6"></div>

                <div class="swiper-slide"><img src="backgrounds\7.jpg" alt="Slide 7">-<img src="backgrounds\8.jpg" alt="Slide 8"></div>

                <div class="swiper-slide"><img src="backgrounds\9.jpg" alt="Slide 9">-<img src="backgrounds\10.jpg" alt="Slide 10"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <script>
           var swiper = new Swiper(".mySwiper", {
            cssMode: true,
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
        </script>

    </section>

    <section class="portfolio-section">
        <h2>Коротко о нас</h2>
        <hr>
        <p>
            "Мы — команда профессионалов, знающих о вашем автомобиле все, а возможно, даже больше, чем вы.
            В нашей студии детейлинга каждая деталь вашего авто преображается в произведение искусства.
            Доверьте свой автомобиль нам, и он станет настоящей звездой дорог!"
            <p>
                Детейлинг – это комплекс профессиональных процедур, направленных на косметический ремонт автомобиля.
            </p>
        </p>
      
    </section>

</div>
@endsection
