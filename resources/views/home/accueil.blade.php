@extends('home.layouts.app')

@section('content')  
 
<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('template/assets/img/chantier-1.jpeg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium align-items-center et justify-content-center text-primary text-uppercase animated slideInRight"><marquee>Bienvenue à GUMA LOGISTIQUE</marquee></p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Entreprise fournisseur des solutions immobilières</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('template/assets/img/chantiers-batiment.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Entreprise fournisseur des solutions immobilières</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- video Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                    <video width="600" height="500" controls>
                      <source src="{{asset('template/assets/video/VID-20231106-WA0028.mp4')}}" type=video/mp4>
                    </video>
                        <!-- <span class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block" style="width: 120px; height: 120px;"></span> -->
                        <!-- <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="" data-bs-target="#videoModal">
                            <span></span>
                        </button> -->
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">POURQUOI NOUS CHOISIR !</p>
                    <h1 class="display-5 mb-4">Quelques raisons pour lesquelles les gens nous choisissent !</h1>
                    <p class="mb-4">Toujours dans un soucis de satisfaire notre clientèle et du respect des délais, nous travaillons sous pression , des jours et nuits</p>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Travailleurs expérimentés</h4>
                                    <span>Ils travaillent jours et nuits et respectent le delais</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Services immobiliers fiables</h4>
                                    <span>Nous vous offrons des meilleurs services immobiliers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Assistance client 24h/24 et 7j/7</h4>
                                    <span>Toujours disponible pour assister ses Clients.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video End -->

    <!-- Video Modal Start -->
    <!-- <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Guma Logistique Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    16:9 aspect ratio
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="play"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Video Modal End -->
@endsection