@extends('layouts.app')

@section('content')

<!-- image -->
<div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('template/assets/img/chantier.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Contactez nous</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- end image -->

<!-- Contact Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-center mb-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Numero de téléphone</h4>
                        <p class="mb-2">+225 01 02 00 33 45</p>
                        <p class="mb-4">+225 07 07 52 26 42</p>
                        <p class="mb-4">+225 27 22 14 52 80</p>
                        <a class="btn btn-primary px-4" href="tel:+0123456789">Appellez-nous <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-envelope-open fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Addresse Email</h4>
                        <p class="mb-2">gumalogistique@gmail.com</p>
                        <a class="btn btn-primary px-4" href="mailto:info@example.com">Envoyez nous un e-mail <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Adresse</h4>
                        <p class="mb-2">+01 BP 2568 Abidjan 01</p>
                        <p class="mb-4">Cocody-II Plateaux, rue Bleue Marine</p>
                        <a class="btn btn-primary px-4" href="https://maps.app.goo.gl/4Nzs1bZSMZC2Fzup9" target="blank">Direction <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15888.782245642135!2d-3.9997161!3d5.3871368!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc195ae40c07299%3A0x8921c298194c0513!2sGUMA%20LOGISTIQUE!5e0!3m2!1sfr!2sci!4v1702489626410!5m2!1sfr!2sci" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Contactez-nous</p>
                    <h1 class="display-5 mb-4">Si vous avez des questions, n'hésitez pas à nous contacter</h1>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="post" action="{{ route('contact/submit') }}">
                    @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                    <label for="name">Votre Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Votre Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    <label for="subject">Sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection