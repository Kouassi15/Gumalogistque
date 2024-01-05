<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Suivez-nous:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Appellez-nous:</span>
                    <span class="fs-5 fw-bold">+225 27 22 14 52 80</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="#" class="navbar-brand ps-5 me-0">
            <h1 class="text-white m-0">GUMA LOGISTIQUE</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('accueil')}}" class="nav-item nav-link">Accueil</a>
                <a href="{{route('apropos')}}" class="nav-item nav-link">A Propos</a>
                <a href="{{route('services')}}" class="nav-item nav-link">Nos Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Projets Realisés</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ route('projets/sodexam') }}" class="dropdown-item">Projets</a>
                        <a href="{{ route('projets')}}" class="dropdown-item">Nos Equipes</a>
                        <a href="{{ route('liste/materiel')}}" class="dropdown-item">Listes de materiels</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{route('contact')}}" class="btn btn-primary px-3 d-none d-lg-block">Contactez-nous</a>
        </div>
    </nav>
    <!-- Navbar End -->