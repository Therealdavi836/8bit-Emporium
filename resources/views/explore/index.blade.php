<!DOCTYPE html>
<html lang="en">
    <head>
        <title>8-bit Emporium |Explorar</title>
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
        .retro-font {
        font-family: 'VT323', monospace;
        font-size: 24px;
        color:rgb(216, 15, 235);
        text-shadow: 2px 2px #000;
        }
        .encapsulated {
        border: 2px solid #000; /* Cambia el color y grosor del borde según tus necesidades */
        padding: 20px; /* Ajusta el padding según tus necesidades */
        margin: 20px auto; /* Centra el contenedor y ajusta el margen según tus necesidades */
        max-width: 1200px; /* Ajusta el ancho máximo según tus necesidades */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Añade una sombra para darle un efecto de profundidad */
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
                    <!-- Tabla de videojuegos -->
                    <div class="d-flex justify-content-center">
                        <h2 class="retro-font">Explorar videojuegos y tarjetas de recarga</h2>
                    </div>
                    <div class="col-md-12" style="max-height: 800px; overflow-y: auto;">
                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/Dbdx7ihzJk48bASi_G0jHEgx2obfGYE_tNyWsjtJ4a4_350x200_1x-0.png" alt="Minecraft: Java & Bedrock Edition (PC) Official website Key GLOBAL" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Minecraft: Java & Bedrock Edition (PC) and other versions</h5>
                                            <p class="game-price card-text">COP 59,971.65</p>
                                            <p class="game-developer card-text">Desarrollador: Mojang Studios</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Minecraft: Java & Bedrock Edition (PC) and other versions" 
                                                    data-game-price="COP 59,971.65" 
                                                    data-game-developer="Mojang Studios" 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/s29Db6ZBVLneuD0t66qnYRamvGDP3p8chLz-3IomxcU_350x200_1x-0.jpeg" alt="Grand Theft Auto V: Premium Online Edition Rockstar Games" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Grand Theft Auto V: Premium Online Edition Rockstar Games</h5>
                                            <p class="game-price card-text">COP 39,561.89</p>
                                            <p class="game-developer card-text">Desarrollador: Rockstar Games</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Grand Theft Auto V: Premium Online Edition Rockstar Games" 
                                                    data-game-price="COP 39,561.89" 
                                                    data-game-developer="Rockstar Games" 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/h7mjvpeeoukd36zuywlb_350x200_1x-0.jpg" alt="Minecraft: Java & Bedrock Edition (PC) Official website Key GLOBAL" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Outlast 2</h5>
                                            <p class="game-price card-text">COP 5000.01</p>
                                            <p class="game-developer card-text">Desarrollador: Red Barrels Studio</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Outlast 2" 
                                                    data-game-price="COP 5000.01" 
                                                    data-game-developer="Red Barrels Studio" 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/31WlmzT3VZrZcnAefumHN01pyfQOG3IKjnS-kf0Mtlk_350x200_1x-0.jpeg" alt="Minecraft: Java & Bedrock Edition (PC) Official website Key GLOBAL" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Batman Arkham Collection</h5>
                                            <p class="game-price card-text">COP 14,525.65</p>
                                            <p class="game-developer card-text">Desarrollador: RockSteady Studios</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Batman Arkham Collection" 
                                                    data-game-price="COP 14,525.65" 
                                                    data-game-developer="RockSteady Studios" 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/94BY1T7noGspA1q8TkGtsy8TJ6shJ2pYFx9crJ1gPNg_350x200_1x-0.jpeg" alt="Minecraft: Java & Bedrock Edition (PC) Official website Key GLOBAL" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Mortal Kombat 11</h5>
                                            <p class="game-price card-text">COP 14,755.45</p>
                                            <p class="game-developer card-text">Desarrollador: NetherRealm Studios</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Mortal Kombat 11" 
                                                    data-game-price="COP 14,755.45" 
                                                    data-game-developer="NetherRealm Studios" 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/6M1qP76B-j6vdX0T4bFCHgJeX99MaKBpXFxbpif1MqY_350x200_1x-0.jpeg" alt="Minecraft: Java & Bedrock Edition (PC) Official website Key GLOBAL" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Red Dead Redemption 2</h5>
                                            <p class="game-price card-text">COP 59,971.65</p>
                                            <p class="game-developer card-text">Desarrollador: Rockstar Games</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Red Dead Redemption 2" 
                                                    data-game-price="COP 59,971.65" 
                                                    data-game-developer="Rockstar Games" 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/iQlB8hB_350x200_1x-0.jpg" alt="Minecraft: Java & Bedrock Edition (PC) Official website Key GLOBAL" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Devil May Cry</h5>
                                            <p class="game-price card-text">COP 7,971.65</p>
                                            <p class="game-developer card-text">Desarrollador: Ninja Theory</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Devil May Cry"
                                                    data-game-price="COP 7,971.65" 
                                                    data-game-developer="Ninja Theory" 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/sUy2lsKaBsQQG87bW_irtBrEf7JShOf_tFNqj1qeizE_350x200_1x-0.jpg" alt="Minecraft: Java & Bedrock Edition (PC) Official website Key GLOBAL" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Cyberpunk 2077 Ultimate Edition</h5>
                                            <p class="game-price card-text">COP 162,481.65</p>
                                            <p class="game-developer card-text">Desarrollador: CD Projekt RED</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Cyberpunk 2077 Ultimate Edition" 
                                                    data-game-price="COP 162,481.65" 
                                                    data-game-developer="CD Projekt RED" 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/RFtRY_G2xUpO7gA2_HV6wIPnSuOx3zEgIFu4HaMxTGk_350x200_1x-0.jpg" alt="Minecraft: Java & Bedrock Edition (PC) Official website Key GLOBAL" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Horizon Forbidden West Complete Edition</h5>
                                            <p class="game-price card-text">COP 155,167.65</p>
                                            <p class="game-developer card-text">Desarrollador: Guerrilla Games</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Horizon Forbidden West Complete Edition" 
                                                    data-game-price="COP 155,167.65" 
                                                    data-game-developer="Guerrilla Games" 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/ybSvqH7c91J3rS_aHQwDYu9Z1QmveNweOxz6BH4u6P0_350x200_1x-0.jpeg" alt="Minecraft: Java & Bedrock Edition (PC) Official website Key GLOBAL" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Doom Eternal Deluxe Edition</h5>
                                            <p class="game-price card-text">COP 73,477.88</p>
                                            <p class="game-developer card-text">Desarrollador: id Software</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Doom Eternal Deluxe Edition" 
                                                    data-game-price="COP 73,477.88" 
                                                    data-game-developer="id Software" 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/lHhh0QIwe31ldbD6R2dGByQJ7Z4L-sbDhd-NA5pZoyk_350x200_1x-0.jpg" alt="Minecraft: Java & Bedrock Edition (PC) Official website Key GLOBAL" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Far Cry 6 Gold Edition</h5>
                                            <p class="game-price card-text">COP 96,231.65</p>
                                            <p class="game-developer card-text">Desarrollador: Ubisoft Studios</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Far Cry 6 Gold Edition" 
                                                    data-game-price="COP 96,231.65" 
                                                    data-game-developer="Ubisoft Studios" 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/v6yqTUggd2gt8PlyhbGVm_pT0W5Unu6N5R7TkKO_DV0_350x200_1x-0.jpg" alt="Minecraft: Java & Bedrock Edition (PC) Official website Key GLOBAL" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Street Fighter 6 Ultimate Edition</h5>
                                            <p class="game-price card-text">COP 59,971.65</p>
                                            <p class="game-developer card-text">Desarrollador: 	CAPCOM Co., Ltd.</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                                <button class="btn btn-outline-danger add-to-wishlist" 
                                                    data-game-name="Street Fighter 6 Ultimate Edition" 
                                                    data-game-price="COP 59,971.65" 
                                                    data-game-developer="CAPCOM Co., Ltd." 
                                                    data-user-role="{{ Auth::check() && Auth::user()->role_id == '2002' ? 'customer' : 'guest' }}">
                                                    ❤️ Agregar a lista de deseos
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://www.compudemano.com/wp-content/uploads/2018/12/xbox_live_gold_prepago.jpg" alt="Tarjeta de recarga Xbox Live Gold 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta de recarga Xbox Live Gold 12 meses</h5>
                                            <p class="game-price card-text">COP 120,000.00</p>
                                            <p class="game-developer card-text">Proveedor: Microsoft</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://www.ktronix.com/medias/799366421788-001-750Wx750H?context=bWFzdGVyfGltYWdlc3w4MzIxMHxpbWFnZS93ZWJwfGFERTFMMmcxTUM4eE5EQTNORFkwTnpZd09UTTNOQzgzT1Rrek5qWTBNakUzT0RoZk1EQXhYemMxTUZkNE56VXdTQXxhMDJmMmNlOGMzMzZlNDc5NmM3ZDM3ZjFmOTZkNTUxMDc3ZmExMWI1Zjc4YTMxYjhmOGE5OTRjMzBkOGQ0Mjhi" alt="Tarjeta de recarga Xbox Live Gold 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta de regalo Xbox</h5>
                                            <p class="game-price card-text">COP 150,000.00</p>
                                            <p class="game-developer card-text">Proveedor: Microsoft</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://www.ktronix.com/medias/196742058840-001-750Wx750H?context=bWFzdGVyfGltYWdlc3wxNjY0OHxpbWFnZS93ZWJwfGFEQTJMMmd3WkM4eE5EYzFPVGd6TlRJd05UWTJNaTh4T1RZM05ESXdOVGc0TkRCZk1EQXhYemMxTUZkNE56VXdTQXxlNWZiNTgwYjMxZmRkODhiZDZkM2ZkYTk0ZTRjY2M0NThkM2IwYWRkZDMwNzdlZTViMDdhMjc4ODhhZjNmZjUw" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta de recarga PSN 100$ USD</h5>
                                            <p class="game-price card-text">COP 460,000.00</p>
                                            <p class="game-developer card-text">Proveedor: Sony Entertainment</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://www.compudemano.com/wp-content/uploads/2018/12/tarjetas_prepago_playstation.jpg.webp" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta de servicio Playstation Plus</h5>
                                            <p class="game-price card-text">COP 360,000.00</p>
                                            <p class="game-developer card-text">Proveedor: Sony Entertainment</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://www.compudemano.com/wp-content/uploads/2017/11/tarjeta-nintendo-e-shop.jpg" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta Nintendo eShop $50 USD</h5>
                                            <p class="game-price card-text">COP 200,000.00</p>
                                            <p class="game-developer card-text">Proveedor: Nintendo Company</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/qx6ykuDPMDDGFDt5axrzXEm7F-Tm9H38HgS0I5nDrxA_350x200_1x-0.jpg" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta Razer Gold $50 USD</h5>
                                            <p class="game-price card-text">COP 197,500.00</p>
                                            <p class="game-developer card-text">Proveedor: Razer Computing</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/qx6ykuDPMDDGFDt5axrzXEm7F-Tm9H38HgS0I5nDrxA_350x200_1x-0.jpg" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta Razer Gold $525 USD</h5>
                                            <p class="game-price card-text">COP 2,285,000</p>
                                            <p class="game-developer card-text">Proveedor: Razer Computing</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/qx6ykuDPMDDGFDt5axrzXEm7F-Tm9H38HgS0I5nDrxA_350x200_1x-0.jpg" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta Razer Gold $20 USD</h5>
                                            <p class="game-price card-text">COP 78,900</p>
                                            <p class="game-developer card-text">Proveedor: Razer Computing</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/qx6ykuDPMDDGFDt5axrzXEm7F-Tm9H38HgS0I5nDrxA_350x200_1x-0.jpg" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta Razer Gold $60 USD</h5>
                                            <p class="game-price card-text">COP 295,900</p>
                                            <p class="game-developer card-text">Proveedor: Razer Computing</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/qx6ykuDPMDDGFDt5axrzXEm7F-Tm9H38HgS0I5nDrxA_350x200_1x-0.jpg" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta Razer Gold $100 USD</h5>
                                            <p class="game-price card-text">COP 395,920</p>
                                            <p class="game-developer card-text">Proveedor: Razer Computing</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/qx6ykuDPMDDGFDt5axrzXEm7F-Tm9H38HgS0I5nDrxA_350x200_1x-0.jpg" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta Razer Gold $200 USD</h5>
                                            <p class="game-price card-text">COP 790,910</p>
                                            <p class="game-developer card-text">Proveedor: Razer Computing</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/qx6ykuDPMDDGFDt5axrzXEm7F-Tm9H38HgS0I5nDrxA_350x200_1x-0.jpg" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta Razer Gold $300 USD</h5>
                                            <p class="game-price card-text">COP 1,290,910</p>
                                            <p class="game-developer card-text">Proveedor: Razer Computing</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://products.eneba.games/resized-products/qx6ykuDPMDDGFDt5axrzXEm7F-Tm9H38HgS0I5nDrxA_350x200_1x-0.jpg" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta Razer Gold $400 USD</h5>
                                            <p class="game-price card-text">COP 1,790,910</p>
                                            <p class="game-developer card-text">Proveedor: Razer Computing</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://www.nicepng.com/png/detail/343-3436528_epic-games-gift-card.png" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta Epic Games €10</h5>
                                            <p class="game-price card-text">COP 43,910</p>
                                            <p class="game-developer card-text">Proveedor: Epic Games Store</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="game-item card mb-4">
                                        <div class="game-image card-img-top">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS38sIbvPuz6YqxnWxmCZ2LuvV5kg-IXOD6yA&s" alt="Tarjeta de recarga PSN 12 meses" class="img-fluid">
                                        </div>
                                        <div class="game-details card-body">
                                            <h5 class="game-title card-title">Tarjeta Steam Wallet Prepagada - Sin limite de región $50 USD</h5>
                                            <p class="game-price card-text">COP 882,910</p>
                                            <p class="game-developer card-text">Proveedor: Steam Corporation</p>
                                            <div class="game-buttons d-flex justify-content-between">
                                                <button class="btn btn-primary add-to-cart">Añadir al carrito</button>
                                                <button class="btn btn-secondary">Comprar ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Cierra col-md-9 -->
                    </div>
                </div> <!-- Cierra row -->
            </div> <!-- Cierra container -->
            <br>
            <section>
                <div class="container encapsulated">
                    <div class="s7aKcu">
                        <div class="JvVBVx">
                            <p>
                                Desde los primeros días de las computadoras, 
                                las personas han encontrado formas de jugar videojuegos en ellas. Desde la creación del primer videojuego, 
                                la industria del juego ha estado perfeccionando el arte de la narración digital y el juego atractivo de manera bastante rápida. 
                                Hoy en día, podemos disfrutar de videojuegos ricos en personajes multidimensionales, mundos interactivos, visuales fenomenales, 
                                mecánicas de combate rápidas, juegos multijugador que reúnen a jugadores de todo el mundo para trabajar en equipo y, por supuesto, 
                                las historias cautivadoras. La selección de videojuegos es enorme: juegos de 8 bits, los títulos AAA masivos y muchos más que varían 
                                en género y jugabilidad, por lo que incluso los más exigentes encuentran videojuegos para entretenerse. 
                                Estamos orgullosos de ofrecer una amplia variedad de videojuegos para satisfacer todos los gustos, 
                                así que obtén tu código de juego más barato (o tu videojuego en fisico) sin importar la consola que uses, 
                                ya que ofrecemos juegos para <strong><a href="https://www.eneba.com/store/xbox-games">Xbox</a></strong>, 
                                <strong><a href="https://www.eneba.com/store/nintendo-games">Nintendo</a></strong>, 
                                <strong><a href="https://www.eneba.com/store/psn-games">PSN</a></strong> y jugadores de PC.
                            </p>
                            <h2>El valor de los videojuegos digitales</h2>
                            <p>Los videojuegos digitales se han vuelto especialmente populares entre los jugadores de todo el mundo, 
                                así que veamos qué beneficios presentan los juegos digitales:
                            </p>
                            <ul>
                                <li>Se pueden comprar con solo unos pocos clics;</li>
                                <li>Función de pre-pedido;</li>
                                <li>Contenido de juegos y DLCs actualizado periódicamente;</li>
                                <li>No se pueden perder los videojuegos digitales;</li>
                                <li>No es necesario cambiar discos o cartuchos en la consola.</li>
                            </ul>
                            <p>
                                En primer lugar, los videojuegos digitales son convenientes. 
                                Puedes comprar el juego o las claves de CD del juego e instalar juegos digitales desde tu consola o 
                                PC sin tener que ir a una tienda física, sin mencionar la gran función de pre-pedido. 
                                Tener un juego digital en tu biblioteca significa tener todos tus datos de juego guardados en la nube y que el contenido 
                                se actualizará de vez en cuando, por lo que disfrutarás de los parches y actualizaciones más recientes de los juegos en tu posesión. 
                                Además, los videojuegos digitales tienden a ser más baratos, especialmente si compras claves de videojuegos. 
                                Una vez que compras una clave de videojuego, recibes un código de juego que debe ser canjeado en su respectiva plataforma para 
                                que puedas disfrutar de tu nueva compra. Con los videojuegos digitales no tienes que levantarte del sofá para cambiar el disco. 
                                Simplemente puedes cerrar el juego y encontrar otro en tu biblioteca de videojuegos. Los juegos digitales también son más sostenibles 
                                y se venden sin cajas de plástico.
                            </p>
                            <h2>La popularidad de los videojuegos</h2>
                            <p>
                                Los videojuegos son una de las formas de entretenimiento más populares y su popularidad está aumentando constantemente, sin embargo, ¿qué es lo que realmente hace que estos juegos sean tan populares? Hay muchas razones, por supuesto, pero quizás una de las más prominentes es que no eres un espectador: eres un participante activo que interactúa con el mundo virtual y los personajes, moldeando el resultado de la historia, como por ejemplo en <strong><a href="https://www.eneba.com/category/rpg-games">juegos RPG</a></strong>. Al jugar, podemos desempeñar un papel con el que más nos identificamos, realizar actividades que tal vez no podamos hacer en la vida real, como participar en un shooter de supervivencia como en <strong><a href="https://www.eneba.com/collection/battle-royale-games">battle royale</a></strong>. ¿A quién no le gusta un poco de adrenalina sin tener que recibir una bala real en el pecho? Los videojuegos ofrecen muchas más actividades que involucran la mente, por esa razón, no hay límite de edad para disfrutar de los videojuegos, ¡así que obtén claves de juegos baratos hoy y disfruta!
                            </p>
                            <h2>Beneficios de los videojuegos</h2>
                            <p>
                                Está claro que los videojuegos digitales son una forma maravillosa de arte y entretenimiento, pero no se detiene ahí: los videojuegos también tienen beneficios notables. Por ejemplo, los juegos en línea promueven y practican habilidades de trabajo en equipo, así como crean un buen ambiente para la compañía y hacer amigos. Mientras tanto, los <strong><a href="https://www.eneba.com/category/strategy-games">juegos de estrategia</a></strong> pueden ayudarte a anticipar decisiones, calcular dónde y cómo sucederán las cosas, ver patrones y soluciones de rompecabezas, y procesar la información en consecuencia. Los <strong><a href="https://www.eneba.com/category/sport-games">juegos deportivos</a></strong> y los <strong><a href="https://www.eneba.com/category/fps-games">juegos de disparos</a></strong> practican habilidades motoras, orientación espacial y en general entrenan los reflejos. ¡Cualquiera que sea el género que elijas, estás destinado a ganar algo positivo además de pasar un tiempo increíblemente divertido, ya sea que juegues multijugador o un solo jugador! Compra claves de CD de videojuegos al mejor precio y disfruta de las mejores ofertas de juegos en nuestra tienda, ¡y buena suerte en tu viaje digital!
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </section> <!-- Cierra section -->


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
        <script src="{{ asset('js/PlatformDetailFormValidation.js') }}"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <!-- Script para almacenar en el carrito -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelectorAll(".add-to-cart").forEach(button => {
                    button.addEventListener("click", function() {
                        const gameCard = this.closest(".game-item"); 
                        const gameData = {
                            title: gameCard.querySelector(".game-title").textContent,
                            price: gameCard.querySelector(".game-price").textContent,
                            developer: gameCard.querySelector(".game-developer").textContent,
                            image: gameCard.querySelector(".game-image img").src
                        };

                        // Guardar en localStorage
                        let cart = JSON.parse(localStorage.getItem("cart")) || [];
                        cart.push(gameData);
                        localStorage.setItem("cart", JSON.stringify(cart));

                        alert("🎮 Agregado al carrito");
                    });
                });
            });
            document.addEventListener("DOMContentLoaded", function () {
                const wishlistButtons = document.querySelectorAll(".add-to-wishlist");

                wishlistButtons.forEach(button => {
                    button.addEventListener("click", function () {
                        const gameName = this.getAttribute("data-game-name");
                        const gamePrice = this.getAttribute("data-game-price");
                        const gameDeveloper = this.getAttribute("data-game-developer");
                        const userRole = this.getAttribute("data-user-role");

                        // Evitar que se agreguen elementos sin datos válidos
                        if (!gameName || !gamePrice || !gameDeveloper) {
                            alert("Error: Información del juego no válida.");
                            return;
                        }

                        if (userRole !== "customer") {
                            alert("Debes iniciar sesión como cliente para agregar a la lista de deseos.");
                            return;
                        }

                        let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];

                        // Verificar si el juego ya está en la lista
                        const gameExists = wishlist.some(game => game.name === gameName);

                        if (!gameExists) {
                            wishlist.push({
                                name: gameName,
                                price: gamePrice,
                                developer: gameDeveloper
                            });
                            localStorage.setItem("wishlist", JSON.stringify(wishlist));
                            alert(`${gameName} se ha añadido a tu lista de deseos.`);
                        } else {
                            alert(`${gameName} ya está en tu lista de deseos.`);
                        }
                    });
                });
            });
        </script>
    </body>
</html>