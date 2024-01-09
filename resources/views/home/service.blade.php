@extends('home.layouts.app')

@section('content')
<!-- image -->
<div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" id="animatedImage" src="{{asset('template/assets/img/promotionimmobilier.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <!-- <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">25 Years of Working Experience</p> -->
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Nos differents services</h1>
                                    <!-- <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
    <!-- end image -->
 <!-- Service Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Nos Services</p>
                <h1 class="display-5 mb-4">Nous fournissons les meilleurs services dans l'immobilier</h1>
            </div>
            <div class="row gy-5 gx-4 g-3">
                <div class="col-md-3 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item h-100">
                        <img class="img-fluid h-100" src="{{asset('template/assets/img/terrain.jpeg')}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid h-100" src="{{asset('template/assets/img/terrain.jpeg')}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Vente de Terrain</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Venez acheter vos terrains en tout securité.</p>
                            </div>
                        </div>
                        <!-- <a class="btn btn-light" href="">Read More</a> -->
                    </div>
                </div>
                <div class="col-md-3 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item h-100">
                        <img class="img-fluid h-100" src="{{asset('template/assets/img/lotissement.jpg')}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid h-100" src="{{asset('template/assets/img/lotissement.jpg')}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Lotissements</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">GUMA LOGISTIQUE est disponible pour tout votre lotissement.</p>
                            </div>
                        </div>
                        <!-- <a class="btn btn-light" href="">Read More</a> -->
                    </div>
                </div><br>
                <div class="col-md-3 col-lg-4 wow fadeInUp " data-wow-delay="0.5s">
                    <div class="service-item h-100">
                        <img class="img-fluid h-100" src="{{asset('template/assets/img/decapage.jpg')}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid h-100" src="{{asset('template/assets/img/decapage.jpg')}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Décapage</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Pour le décapage ne cherchez plus loin GUMA LOGISTIQUE est à votre disponibilité.</p>
                            </div>
                        </div>
                        <!-- <a class="btn btn-light" href="">Read More</a> -->
                    </div>
                </div>
                <div class="col-md-3 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item h-100">
                        <img class="img-fluid h-100" src="{{asset('template/assets/img/immobilier.png')}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid h-100" src="{{asset('template/assets/img/immobilier.png')}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Promotions-Constructions</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Pour la promotion et la construction de votre maison GUMA LOGISTIQUE est là pour vous accompagné.</p>
                            </div>
                        </div>
                        <!-- <a class="btn btn-light" href="">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection