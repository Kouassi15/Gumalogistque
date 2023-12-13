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
            <!-- <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">25 Years of Working Experience</p> -->
            <h1 class="display-1 text-white mb-5 animated slideInRight">Quelques projets réalisés</h1>
            <!-- <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end image -->
<!-- project start -->
<div class="container-fluid mt-4">
  <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
    <p class="fw-medium text-uppercase text-primary mb-2">Nos Projets</p>
    <h1 class="display-5 mb-4">Quelques projets réalisés</h1>
  </div>
  <div class="row mb-4 ">
    <div class="col-md-4 mb-3 ">
      <div class="card h-100 p-3">
        <div class="card-body">
          <a class="project-item" href="#">
            <img class="img-fluid " src="{{asset('template/assets/img/maison-2.jpg')}}" alt="">
          </a>
          <p class="card-text">bâtiment du Département des expertises Medicale du personnel Aéronautique.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3 ">
      <div class="card h-100 p-3">
        <div class="card-body">
          <a class="project-item" href="#">
            <img class="img-fluid " src="{{asset('template/assets/img/maison-1.jpg')}}" alt="">
          </a>
          <p class="card-text">Réaménagement vigie et Bureau d'instruction .</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3 ">
      <div class="card h-100 p-3">
        <div class="card-body">
          <a class="project-item" href="#">
            <img class="img-fluid " src="{{asset('template/assets/img/aeroport.jpg')}}" alt="">
          </a>
          <p class="card-text">Réabilitation de l'aéroport international de Yamoussoukro.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3 ">
      <div class="card h-100 p-3 ">
        <div class="card-body ">
          <a class="project-item" href="#">
            <img class="img-fluid " src="{{asset('template/assets/img/Air.jpg')}}" alt="">
          </a>
          <p class="card-text">Réabilitation de l'aéroport international d'Odienné.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3 ">
      <div class="card h-100 p-3">
        <div class="card-body">
          <a class="project-item" href="#">
            <img class="img-fluid " src="{{asset('template/assets/img/kine-3.jpeg')}}" alt="">
          </a>
          <p class="card-text">Construction de Kinésie théraeupte.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card h-100 p-3">
        <div class="card-body">
          <a class="project-item" href="#">
            <img class="img-fluid " src="{{asset('template/assets/img/tresor.jpg')}}"  alt="">
          </a>
          <p class="card-text">Réahabitation de la trésorerie et de la résidence de la trésorerie d'Adzopé .</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-4 mb-3 ">
      <div class="card h-100 p-3">
        <div class="card-body">
          <a class="project-item" href="#">
            <img class="img-fluid " src="{{asset('template/assets/img/entrepot-coton.jpg')}}"  alt="">
          </a>
          <p class="card-text">Conception et réalisation d'un entrpôt de stokage de coton à Kohrogo .</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card h-100 p-3">
        <div class="card-body ">
          <a class="project-item" href="#">
            <img class="img-fluid " src="{{asset('template/assets/img/bouake.jpg')}}" alt="">
          </a>
          <p class="card-text">Réahabitation des locaux pulics de la region de Bouaké .</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end project -->

@endsection