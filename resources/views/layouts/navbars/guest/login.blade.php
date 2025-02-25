<nav
    class="navbar navbar-expand-lg  top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid">
        <ul class="navbar-nav items-start content-start">
            <li class="nav-item">
                <a class="nav-link text-dark font-extrabold me-2 text-dark" href=" {{ auth()->user() ? route('static-sign-up') : route('sign-up') }}">
                    <i class="fas fa-user-circle font-extrabold text-dark me-1">REGISTRARSE</i>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link text-dark me-2" href="{{ auth()->user() ? route('sign-in') : route('login') }}">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    INGRESAR
                </a>
            </li> --}}
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
