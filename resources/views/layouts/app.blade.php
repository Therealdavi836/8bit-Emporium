<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>8-bit Emporium</title>

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ asset('js/modernizr.js') }}"></script>
</head>

<body>
    <div id="app" class="d-flex flex-column min-vh-100">
        
        <!-- Incluir Header -->
        @include('partials.header')

        <!-- Main Content -->
        <main class="container flex-grow-1 py-4" style="min-height: 80vh;">


            @yield('content')
        </main>

        <!-- Incluir Footer -->
        @include('partials.footer')

        <!-- Footer Bottom Section -->
        <div id="footer-bottom">
            <div class="container">
                <div class="row d-flex flex-wrap justify-content-between">
                    
                    <!-- Shipping Partners -->
                    <div class="col-md-4 col-sm-6">
                        <div class="Shipping d-flex">
                            <p>Nuestros aliados para envíos:</p>
                            <div class="card-wrap ps-2">
                                <img src="{{ asset('images/dhl.png') }}" alt="DHL">
                                <img src="{{ asset('images/shippingcard.png') }}" alt="Shipping">
                            </div>
                        </div>
                    </div>

                    <!-- Payment Methods -->
                    <div class="col-md-4 col-sm-6">
                        <div class="payment-method d-flex">
                            <p>Metodos de pago validos:</p>
                            <div class="card-wrap ps-2">
                                <img src="{{ asset('images/visa.jpg') }}" alt="Visa">
                                <img src="{{ asset('images/mastercard.jpg') }}" alt="Mastercard">
                                <img src="{{ asset('images/paypal.jpg') }}" alt="PayPal">
                            </div>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="col-md-4 col-sm-6">
                        <div class="copyright">
                            <p>© Copyright 2023 8-bit Emporium. Design by 
                                <a href="https://templatesjungle.com/">TemplatesJungle</a> 
                                Distribution by 
                                <a href="https://themewagon.com">ThemeWagon</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>


