 <!-- logo start -->

 <div class="container mt-5 p-5">
    <div class="row">
        <div class="col-md-3">
            <div class="d-flex justify-content-center ">
                <img src="{{asset('template/assets/img/logo1.jpg')}}" alt="Logo 1" class="img-fluid logo-images" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-flex justify-content-center ">
                <img src="{{asset('template/assets/img/logo2.jpg')}}" alt="Logo 2" class="img-fluid logo-images" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-flex justify-content-center">
                <img src="{{asset('template/assets/img/logo3.jpg')}}" alt="Logo 3" class="img-fluid logo-images" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-flex text-center">
                <img src="{{asset('template/assets/img/BUDGET.png')}}" alt="Logo 3" class="img-fluid logo-images">
                <div>
              </div>
            </div>
        </div>
    </div>
</div>


    </div>
</div>
 <!--end log -->
 
 <!-- Footer Start -->
 <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Adresse</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Cocody-II Plateaux, rue Bleue Marine,01 BP 2568 Abidjan 01</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+225 27 22 41 52 80</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>gumalogistique@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Recherche rapide</h5>
                    <a class="btn btn-link" href="{{route('apropos')}}">A Propos</a>
                    <a class="btn btn-link" href="{{route('services')}}">Nos Services</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Contact</a>
                    <a class="btn btn-link" href="{{ route('projets/sodexam') }}">Projets</a>
                    <a class="btn btn-link" href="{{ route('projets')}}">Notre équipe</a>
                    <a class="btn btn-link" href="{{ route('liste/materiel')}}">Listes matériels</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Horaires de travail</h5>
                    <p class="mb-1">Lundi - Vendredi</p>
                    <h6 class="text-light">08h30  - 17h30 </h6>
                    <p class="mb-1">Samedi</p>
                    <h6 class="text-light">Fermer </h6>
                    <p class="mb-1">Dimanche</p>
                    <h6 class="text-light">Fermer</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <div class="position-relative w-100">
                        <form method="post" action="{{ route('utilisateur')}}">
                        @csrf
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" name="email" placeholder="Votre email">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">S'inscrire</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">GUMA LOGISTIQUE</a>,Votre avenir commence ici.</p>
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            <!--<p class="mb-0">Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a></p> -->
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>