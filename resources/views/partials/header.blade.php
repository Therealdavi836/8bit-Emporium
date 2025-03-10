<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<header id="header" class="site-header header-scrolled position-fixed text-black bg-light"> 
  <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/main-logo.png') }}" alt="Logo">
      </a>

      <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="navbar-icon">
          <use xlink:href="#navbar-icon"></use>
        </svg>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
        <div class="offcanvas-header px-4 pb-0">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/main-logo.png') }}" class="logo">
            <span>Haga click para volver a la pagina principal</span>
          </a>
          <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
        </div>

        <div class="offcanvas-body">
          <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
            {{-- MENÚ GENERAL PARA TODOS LOS VISITANTES --}}
            <li class="nav-item">
              <a class="nav-link me-4 active" href="#billboard">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="#company-services">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="#mobile-products">PS5</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="#smart-watches">Nintendo Switch</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="#yearly-sale">Ofertas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="#latest-blog">Próximamente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="/explore">Explorar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="{{ route('discover.index')}}">Descubre</a>
            </li>

            {{-- SOLO PARA CLIENTES --}}
            @auth
              @if(Auth::user()->role_id == '2002')
                <li class="nav-item">
                    <a class="nav-link me-4" href="{{ route('carts.index') }}">Mi carrito</a>
                  </li>
              @endif
            @endauth

            {{-- ICONOS DE USUARIO, CARRITO Y BÚSQUEDA --}}
            <li class="nav-item">
              <div class="user-items ps-5">
                <ul class="d-flex justify-content-end list-unstyled">

                  {{-- ICONOS PARA USUARIOS AUTENTICADOS --}}
                  @auth
                  <div class="btn-group">
                    <li class="pe-3">
                      <a href="{{ Auth::user()->role == '1001' ? '/admin/dashboard' : '/home' }}" class="btn btn-primary text-white fw-semibold">
                        <i class="bi bi-person-circle" style="font-size: 1.2rem;"></i> {{ Auth::user()->name }}
                      </a>
                    </li>
                    <li class="pe-3">
                      <a href="{{ route('carts.index') }}">
                        <i class="bi bi-cart" style="font-size: 1.5rem;"></i>
                      </a>
                    </li>
                    <li class="search-item pe-3">
                      <a href="#" class="search-button">
                        <svg class="search">
                          <use xlink:href="#search"></use>
                        </svg>
                      </a>
                    </li>
                  </div>
                  {{-- ICONOS PARA INVITADOS --}}
                  @else
                    <li class="pe-3">
                      <a href="{{ route('login') }}">
                        <svg class="user">
                          <use xlink:href="#user"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="pe-3">
                      <a href="{{ route('carts.index') }}">
                        <svg class="cart">
                          <use xlink:href="#cart"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="search-item pe-3">
                      <a href="#" class="search-button">
                        <svg class="search">
                          <use xlink:href="#search"></use>
                        </svg>
                      </a>
                    </li>
                  @endauth
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>

