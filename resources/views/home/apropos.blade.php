@extends('layouts.app')

@section('content')

    <!-- image -->
    <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('template/assets/img/construction.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">A propos de nous</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- end image -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{asset('template/assets/img/btp.jpg')}}">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid w-auto h-80" src="{{asset('template/assets/img/about.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">A propos de nous</p>
                    <h1 class="display-5 mb-4">GUMA LOGISTIQUE Sarl</h1>
                    <p class="mb-4">est une entreprise de construction et d'expertise dans le domaine du bâtiment , du genie civil, des travaux publique,
                        du transport et l'import-export. Créé en 2021,<b>GUMA LOGISTIque Sarl</b> se veux une entreprise professionnelle et rigoureuse avec un personne qualifié et expérimenté au service du client.<br> GUMA LOGISTIQUE intervient dans des divers domaines tels que:</p>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>Traveaux de Genie civil,Bitumage,et de voirie et Resaeux Divers</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Entretient de route revêtues et réhabilitation de pistes en terre</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Construction et réhabilitation de bâtiment</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Menuiserie Bois et Industrielle</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Construction métalique et alluminium</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Electricité générale et climatisation</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Entretien et réparation de véhicules</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Fourniture de bureau, matériels infrmatiques, matériels d'équipements</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Fourniture de matériels agricoles et engins</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Etude et Formation</p>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection