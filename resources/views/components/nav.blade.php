<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand text-primary" href="{{ route('home') }}">
                <i class="bi bi-terminal fs-1"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link @if (Request::routeIs('home')) active @endif fw-semibold"
                            aria-current="@if (Request::routeIs('home')) page @endif"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::routeIs('projects.*')) active @endif fw-semibold"
                            aria-current="@if (Request::routeIs('projects.*')) page @endif"
                            href="{{ route('projects.index') }}">Progetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::routeIs('services.*')) active @endif fw-semibold"
                            aria-current="@if (Request::routeIs('services.*')) page @endif"
                            href="{{ route('services.index') }}">Servizi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::routeIs('about')) active @endif fw-semibold"
                            aria-current="@if (Request::routeIs('about')) page @endif" href="{{ route('about') }}">Chi
                            Sono</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::routeIs('contact')) active @endif fw-semibold"
                            aria-current="@if (Request::routeIs('contact')) page @endif"
                            href="{{ route('contact') }}">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
