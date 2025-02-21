<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
    <div class="container">
        <ul class="navbar-nav items-start content-start">
            {{-- <li class="nav-item">
                <a class="nav-link text-white me-2 text-dark"
                    href=" {{ auth()->user() ? route('static-sign-up') : route('sign-up') }}">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    REGISTRASE
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link font-bold text-dark me-2" href="{{ auth()->user() ? route('sign-in') : route('login') }}">
                    <i class="fas fa-key opacity-6 text-dark font-extrabold me-1">INGRESAR</i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>

    </div>
</nav>
