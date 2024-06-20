@extends('layouts.frontend')
@section('title', '| Contacte')
@php
    $contacts = "";
    if(request()->routeIs('contacts.index')) {
        $contacts = "active";
    }
@endphp
@section('meta_description', 'Gimnaziu Iaroslav Gașek')
@section('meta_keywords', 'Gimnaziu Iaroslav Gașek Holuboaia, școala Holuboaia, Iaroslav Gașek . (isset($settings) ? $settings->str : ')

@section('content')
    <!-- Page Header End -->
    @include( 'frontend.partial.header', ['data' => 'Contacte'] )
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Bine ai venit pe pagina noastră de contacte! </h1>
                <p>Suntem o echipă dedicată și plină de entuziasm, pregătită să răspundă întrebărilor tale și să îți ofere suport de calitate. Indiferent dacă ai întrebări despre produsele noastre, vrei să ne oferi feedback sau ai nevoie de asistență pentru a rezolva o problemă, suntem aici pentru a te ajuta. <br> 
                Îți furnizăm toate informațiile de contact de care ai nevoie pentru a ne găsi ușor. Ne poți suna la numărul afișat sau ne poți trimite un e-mail, iar echipa noastră îți va răspunde cât mai curând posibil.
            </p>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                        <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                    </div>
                    <h6>IP Gimaziu "Iaroslav Gașek", str. Pacii, s. Holuboaia, r. Cahul,  MD-3920</h6>
                    <h6>{{ $settings->str??"" }}</h6>
                </div>
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                        <i class="fa fa-envelope-open fa-2x text-primary"></i>
                    </div>
                    <h6>gimnaziulholuboaia@gmail.com</h6>
                    <h6>{{ $settings->email??"" }}</h6>
                </div>
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                        <i class="fa fa-phone-alt fa-2x text-primary"></i>
                    </div>
                    <h6>0 (299) 76 133</h6>
                    <h6>{{ $settings->tf??"" }}</h6>
                </div>
            </div>
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                        Folosește formularul nostru simplu de contact pentru a ne transmite rapid orice întrebări, feedback sau solicitări ai. Echipa noastră va răspunde prompt și se va asigura că primești asistența necesară.</p>
                            @if ($errors->any())
                                <div class="alert alert-danger bg-primary text-white rounded-0">
                                    <ol class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            @endif
                            <form action="{{ route('contact.message') }}" method="post">
                                @csrf
                                @method('post')
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                        <input type="text" name="name" class="form-control border-0" id="name" placeholder="Numele și prenumele">
                                        <label for="name">Numele și prenumele</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                        <input type="text" name="email" class="form-control border-0" id="email" placeholder="Numărul de telefon">
                                        <label for="email">Numărul de telefon</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                        <input type="text" name="subject" class="form-control border-0" id="subject" placeholder="Subiect">
                                        <label for="subject">Subiect</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                        <label for="message">Mesajul</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Trimite mesajul</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                                <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17480.98238718998!2d28.33701172017052!3d46.05598449459868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b6409b9d67aa7d%3A0xca046ed848d80047!2sGimnaziul%20%22Iaroslav%20Ga%C8%99ek%22!5e0!3m2!1sro!2s!4v1718838876819!5m2!1sro!2s"
                                frameborder="0" 
                                style="min-height: 400px; border:0;" 
                                allowfullscreen="" 
                                aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.12/sweetalert2.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.12/sweetalert2.min.js') }}"></script>
@endpush
@if(session('success'))
    @push('scripts')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Succes',
                text: '{{ session('success') }}',
            });
        </script>
    @endpush
@endif