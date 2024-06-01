<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href="/"
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 50px"
        >
        <i class="bi bi-book"></i>
          <span class="text-primary">ProForma</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="/blog" class="nav-item nav-link active">Blog</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Services</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="/formations/secteur" class="dropdown-item">Formation</a>
                <a href="/formations/métier" class="dropdown-item">Accompagnement</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Formations</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="/formations/secteur" class="dropdown-item">Par secteur</a>
                <a href="/formations/métier" class="dropdown-item">Par métier</a>
              </div>
            </div>
            
            <a href="/contact" class="nav-item nav-link">Contact</a>
            <a href="/panier/show" class="nav-item nav-link"><i class="bi bi-cart"></i></a>
          </div>
          @if (Route::has('login'))

          @auth
            <a>
                <x-app-layout>

                </x-app-layout>
            </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary px-4">Login</a>
            @endauth
            @endif
        </div>
      </nav>
      <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    </div>
    </div>
    <!-- Navbar End -->