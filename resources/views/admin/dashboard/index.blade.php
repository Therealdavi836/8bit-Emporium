<!DOCTYPE html>
<html lang="en">
    <head>
        <title>8-bit Emporium | Panel de administración</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <!-- script
        ================================================== -->
        <script src="js/modernizr.js"></script>
    </head>
    <style>
        .bg-primary {
            background-color:rgb(89, 1, 253) !important; /* Color morado */
        }
        .btn-morado {
            color: white !important;
            background-color: rgb(89, 1, 253) !important; /* Color morado */
            border-color: rgb(89, 1, 253) !important; /* Color morado */
        }
    </style>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <title>Search</title>
                <path fill="currentColor" d="M19 3C13.488 3 9 7.488 9 13c0 2.395.84 4.59 2.25 6.313L3.281 27.28l1.439 1.44l7.968-7.969A9.922 9.922 0 0 0 19 23c5.512 0 10-4.488 10-10S24.512 3 19 3zm0 2c4.43 0 8 3.57 8 8s-3.57 8-8 8s-8-3.57-8-8s3.57-8 8-8z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </symbol>
            <svg xmlns="http://www.w3.org/2000/svg" id="chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
            </svg>
            <symbol xmlns="http://www.w3.org/2000/svg" id="chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="cart-outline" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="quality" viewBox="0 0 16 16">
                <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="price-tag" viewBox="0 0 16 16">
                <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z" />
                <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="shield-plus" viewBox="0 0 16 16">
                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                <path d="M8 4.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5a.5.5 0 0 1 .5-.5z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="star-empty" viewBox="0 0 16 16">
                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="star-half" viewBox="0 0 16 16">
                <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="quote" viewBox="0 0 24 24">
                <path fill="currentColor" d="m15 17l2-4h-4V6h7v7l-2 4h-3Zm-9 0l2-4H4V6h7v7l-2 4H6Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
                <path fill="currentColor" d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396v8.01Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
                <path fill="currentColor" d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 256 256">
                <path fill="currentColor" d="m245.66 77.66l-29.9 29.9C209.72 177.58 150.67 232 80 232c-14.52 0-26.49-2.3-35.58-6.84c-7.33-3.67-10.33-7.6-11.08-8.72a8 8 0 0 1 3.85-11.93c.26-.1 24.24-9.31 39.47-26.84a110.93 110.93 0 0 1-21.88-24.2c-12.4-18.41-26.28-50.39-22-98.18a8 8 0 0 1 13.65-4.92c.35.35 33.28 33.1 73.54 43.72V88a47.87 47.87 0 0 1 14.36-34.3A46.87 46.87 0 0 1 168.1 40a48.66 48.66 0 0 1 41.47 24H240a8 8 0 0 1 5.66 13.66Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
                <path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 24 24">
                <path fill="currentColor" d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="nav-icon" viewBox="0 0 16 16">
                <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
                <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
            </symbol>
            <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        </svg>
        <div class="search-popup">
            <div class="search-popup-container">

                <form role="search" method="get" class="search-form" action="">
                    <input type="search" id="search-form" class="search-field" placeholder="Escriba y presione enter" value="" name="s" />
                    <button type="submit" class="search-submit"><svg class="search"><use xlink:href="#search"></use></svg></button>
                </form>

                <h5 class="cat-list-title">Buscar Categorias o productos</h5>
                
                <ul class="cat-list">
                    <li class="cat-list-item">
                    <a href="#" title="Videogames">Videojuegos</a>
                    </li>
                    <li class="cat-list-item">
                    <a href="#" title="Playstation 4">Playstation 4</a>
                    </li>
                    <li class="cat-list-item">
                    <a href="#" title="Playstation 5">Playstation 5 </a>
                    </li>
                    <li class="cat-list-item">
                    <a href="#" title="Recharge Tarjets">Tarjetas de recarga</a>
                    </li>
                    <li class="cat-list-item">
                    <a href="#" title="Xbox Series X/S">Xbox series X/S</a>
                    </li>
                    <li class="cat-list-item">
                    <a href="#" title="Nintendo Switch">Nintendo Switch</a>
                    </li>
                    <li class="cat-list-item">
                    <a href="#" title="Categories">Categorias</a>
                    </li>
                </ul>

            </div>
        </div>
        @include('partials.header')
        <section id="register" class="container-grid padding-large position-relative overflow-hidden">
            <div class="container mt-4">
                <div class="row">
                    @if(Auth::user()->role_id == 1001)
                        <div class="col-md-4">
                            <div class="card" style="border-radius: 20px;">
                                <img src="{{ asset('images/user-setting.png') }}" class="card-img-top" alt="Admin Image" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                <div class="card-body">
                                    <h5 class="card-title">Bienvenido, usuario administrador.</h5>
                                    <p class="card-text">Usuario identificado: {{ Auth::user()->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="accordion" style="max-height: 400px; overflow-y: auto; border-radius: 18px;">
                                <div class="accordion-item">
                                    <div class=" text-center card-header bg-primary text-white">
                                        <h4>Administración de datos</h4>
                                        <p style="color: white;">A continuación señor@ administrador@ en cada sección encontrara los paneles para ingresar, editar, borrar y generar reportes de los datos de la tienda, solo hagalo cuando se le autorice o cuando se considere necesario</p>
                                    </div>
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed d-flex justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Detalle de categorias
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes de las categorias de los videojuegos de la tienda.</p>
                                            <a href="{{ route('category_details.index') }}" class="btn btn-morado">Ir a categorias</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Desarrolladores de videojuegos
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes de los desarrolladores de los videojuegos de la tienda.</p>
                                            <a href="{{ route('developers.index') }}" class="btn btn-morado">Ir a desarrolladores</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Participantes de lanzamientos y eventos
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes de los participantes de los lanzamientos y eventos de la tienda.</p>
                                            <a href="{{ route('participant_releases.index') }}" class="btn btn-morado">Ir a participantes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Detalles de plataformas
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes de los detalles de las plataformas de los videojuegos de la tienda.</p>
                                            <a href="{{ route('platform_details.index') }}" class="btn btn-morado">Ir a plataformas</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Detalles de promociones
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes de los detalles de las promociones de los videojuegos de la tienda.</p>
                                            <a href="{{ route('promotion_details.index') }}" class="btn btn-morado">Ir a promociones de videojuegos</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Promociones
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes de los detalles de las promociones de la tienda.</p>
                                            <a href="{{ route('promotions.index') }}" class="btn btn-morado">Ir a promociones</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            Tarjetas de recarga
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes, tambien recargar las tarjetas de los usuarios.</p>
                                            <a href="{{ route('recharge_tarjets.index') }}" class="btn btn-morado">Ir a recargar</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Lanzamientos
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes de los lanzamientos de los videojuegos de las tiendas.</p>
                                            <a href="{{ route('releases.index') }}" class="btn btn-morado">Ir a lanzamientos</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            Gestión de roles
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar los roles.</p>
                                            <p style="color: orange;">¡Advertencia! Cualquier intento de manipulación de roles resultara en una sanción, acceda bajo su propia responsabilidad</p>
                                            <a href="{{ route('roles.index') }}" class="btn btn-morado">Ir a roles</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Detalles de compras
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes de los registros de compra hechos por los clientes.</p>
                                            <a href="{{ route('sale_details.index') }}" class="btn btn-morado">Ir a detalles</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEleven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            Proveedores
                                        </button>
                                    </h2>
                                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes de los proveedores de videojuegos.</p>
                                            <a href="{{ route('suppliers.index') }}" class="btn btn-morado">Ir a proveedores</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwelve">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                            Videojuegos
                                        </button>
                                    </h2>
                                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes de los videojuegos.</p>
                                            <a href="{{ route('videogames.index') }}" class="btn btn-morado">Ir a videojuegos</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThirteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                            Usuarios
                                        </button>
                                    </h2>
                                    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen">
                                        <div class="accordion-body">
                                            <p style="color: black;">En esta sección podrá ingresar, editar, borrar y generar reportes de los usuarios.</p>
                                            <p style="color: orange;">¡Advertencia! Cualquier intento de manipulación de usuarios resultara en una sanción, acceda bajo su propia responsabilidad</p>
                                            <a href="{{ route('users.index') }}" class="btn btn-morado">Ir a usuarios</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Acciones adicionales</h5>
                                        <a href="{{ route('home') }}" class="btn btn-primary">Volver al inicio</a>
                                        <a href="{{ route('logout') }}" class="btn btn-danger"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Cerrar sesión
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Acceder a detalles de gráficos</h5>
                                        <div class="d-flex justify-content-center gap-3 mt-4">
                                            <a href="{{ url('/graphic_sale_details') }}" class="btn btn-morado">📊 Ver Detalles de Ventas</a>
                                            <a href="{{ url('/graphic_promotions') }}" class="btn btn-morado">🎟️ Ver Promociones</a>
                                            <a href="{{ url('/graphic_recharge_tarjets') }}" class="btn btn-morado">💳 Ver Recargas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        @include('partials.footer')
        <div id="footer-bottom">
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-md-4 col-sm-6">
                <div class="Shipping d-flex">
                <p>Nuestros aliados para envíos:</p>
                <div class="card-wrap ps-2">
                    <img src="{{ asset('images/dhl.png') }}" alt="DHL">
                    <img src="{{ asset('images/shippingcard.png') }}" alt="Shipping">
                </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="payment-method d-flex">
                <p>Metodos de pago validos:</p>
                <div class="card-wrap ps-2">
                    <img src="{{ asset('images/visa.jpg') }}" alt="visa">
                    <img src="{{ asset('images/mastercard.jpg') }}" alt="mastercard">
                    <img src="{{ asset('images/paypal.jpg') }}" alt="paypal">
                </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="copyright">
                <p>© Copyright 2023 8-bit Emporium. Design by <a href="https://templatesjungle.com/">TemplatesJungle</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a>
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
        <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>