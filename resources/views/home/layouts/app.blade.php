<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Guma Logistique-Immobillier</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('template/assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('template/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('template/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet">
</head>

    @include('header.header')

      @yield('content');

    @include('footer.footer')
        <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('template/assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('template/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('template/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('template/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/assets/lib/counterup/counterup.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('template/assets/js/main.js')}}"></script>