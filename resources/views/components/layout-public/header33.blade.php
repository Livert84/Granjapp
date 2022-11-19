<header id="navbar-app" class="p-3 text-bg-dark fixed-top">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            @guest
                <ul class="nav col-12 col-md-auto me-lg-auto mb-2 justify-content-center mb-md-0">

                    <li><a href="#about" class="nav-link px-2 text-white">Nosotros</a></li>
                    <li><a href="#productos" class="nav-link px-2 text-white">Productos</a></li>
                    <li><a href="#events" class="nav-link px-2 text-white">Actividades</a></li>
                    <li><a href="#pricing" class="nav-link px-2 text-white">Suscripciones</a></li>
                    <li><a href="#contact" class="nav-link px-2 text-white">Contactos</a></li>
                </ul>
            @endguest

            @auth
                <ul class="nav col-12 col-md-auto me-lg-auto mb-2 justify-content-center mb-md-0">

                    <li><a href="{{ route('about') }}" class="nav-link px-2 text-white">Nosotros</a></li>
                    <li><a href="{{ route('store') }}" class="nav-link px-2 text-white">Productos</a></li>
                    <li><a href="{{ route('events') }}" class="nav-link px-2 text-white">Actividades</a></li>
                    <li><a href="{{ route('pricing') }}" class="nav-link px-2 text-white">Suscripciones</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link px-2 text-white">Contactos</a></li>
                </ul>
            @endauth



            <div class="text-end">
                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-outline-success ms-3" value="Logout">
                    </form>

                @endauth
                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-success">Acceso</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-success">Registro</a>
                @endguest
            </div>

            @auth
                <div class="ms-2">
                    <button class="btn btn-outline-success" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                            class="bi bi-cart-fill"></i></button>
                </div>
            @endauth
        </div>
    </div>
</header>
