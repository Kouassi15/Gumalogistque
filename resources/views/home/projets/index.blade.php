@extends('home.layouts.app')

@section('content')

<!-- image -->
<div class="carousel-inner h-50">
                <div class="carousel-item active">
                    <img class="w-100 " src="{{asset('template/assets/img/travaux-chantier.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Notre équipe dynamique</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- end image -->

<!-- Team Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp " data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Notre equipe</p>
                <h1 class="display-5 mb-5">Membres de l'équipe dévoullés</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp d-flex" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{asset('template/assets/img/membres-1.jpg')}}" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>GUETCHO TAKEDO MARTIAL</h5>
                                <span class="text-primary">Directeur des travaux</span>
                                <span class="text">Ingénieur 2iE Option Génie Civil</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>                                                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{asset('template/assets/img/membres-2.jpg')}}" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>KANOUSSEUR BIEN NUNKAWOUN BRICE</h5>
                                <span class="text-primary">Conducteur Travaux</span>
                                <span class="text">Technicien Supérieur Optoin Bâtiment et Urbanisme</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{asset('template/assets/img/membres-3.jpg')}}" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-3" style="height: 90px;">
                                <h5>GUIGMA WENDAYAM LAZARE</h5>
                                <span class="text-primary">Chef d'équipe</span>
                                <span class="text">Technicien Supérieur Option Génie Civil</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



@endsection