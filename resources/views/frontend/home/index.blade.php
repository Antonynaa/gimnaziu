@extends('layouts.frontend')
@section('title', '| Acasa')
@php
    $home = "";
    if(request()->routeIs('home.index')) {
        $home = "active";
    }
@endphp
@section('meta_description', 'Gimnaziu Iaroslav Gașek')
@section('meta_keywords', 'Gimnaziu Iaroslav Gașek Holuboaia, școala Holuboaia, Iaroslav Gașek . (isset($settings) ? $settings->str : ')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            @forelse ($slideshows as $slideshow)
             
            @empty
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/uploads/slideshow/image.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                    </div>
                </div>
            </div>
            @endforelse 
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Facilities Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Oportunitățile gimnaziului</h1>
                <p>Bun venit în scoala noastră minunată, unde copiii beneficiază de oportunități nelimitate pentru dezvoltare și descoperire! Cu facilități de învățare moderne, cadre didactice calificate și programe educative inovatoare, ne asigurăm că fiecare copil are posibilitatea de a-și explora potențialul și de a crește într-un mediu sigur și stimulant.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="facility-item square-item">
                        <div class="facility-text bg-primary">
                            <h3 class="text-primary mb-3">Dezvoltare</h3>
                            <p class="mb-0">Dezvoltarea creativității prin artă și joc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="facility-item">
                        <div class="facility-text bg-success">
                            <h3 class="text-success mb-3">Tehnici</h3>
                            <p class="mb-0">Instruirea elevilor de catre organele de stat</p>
                            </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="facility-item">
                        <div class="facility-text bg-warning">
                            <h3 class="text-warning mb-3">Interactiunea sociala</h3>
                            <p class="mb-0">Interacțiune socială și dezvoltarea abilităților sociale.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="facility-item">
                        <div class="facility-text bg-info">
                            <h3 class="text-info mb-3">Fundamente solide</h3>
                            <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities End --> 

    <!-- Call To Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="../img/uploads/events/event3.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">Află mai mult despe activitățile realizate în cadrul instituției noastre</h1>
                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                                Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                            </p>
                            <a class="btn btn-primary py-3 px-5" href="{{ route('event.index') }}">Accesează<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Activitățile extracurriculare</h1>
                <p>Activitățile extracurriculare joacă un rol crucial în dezvoltarea holistică a elevilor, oferindu-le oportunități de explorare și învățare dincolo de curriculumul academic. Aceste activități contribuie la dezvoltarea abilităților sociale și de leadership, consolidând încrederea în sine și stimulând creativitatea prin participare activă în diverse domenii. În plus, ele oferă elevilor șansa de a descoperi noi pasiuni și talente, pregătindu-i pentru provocările viitoare ale vieții.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-5">Sportul nu doar îmbunătățește sănătatea fizică, ci și promovează disciplina și spiritul de echipă.</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/sport.jpg" style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Secție sportivă</h3>
                            <span>Bostan Maria</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-5">Dansurile populare sunt o expresie autentică a culturii și tradițiilor unei comunități, reflectând identitatea și istoria lor culturală.</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/dans.jpg" style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Dansuri populare</h3>
                            <span>Baraghin Nicoleta</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-5">Robotica reprezintă un domeniu fascinant care integrează cunoștințe din inginerie, programare și mecanică pentru a crea și controla roboți în diverse aplicații și industrii.</p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/robot.jpg" style="width: 90px; height: 90px;">
                        <div class="ps-3">
                            <h3 class="mb-1">Robotica</h3>
                            <span>Barbu Ion</span>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection

