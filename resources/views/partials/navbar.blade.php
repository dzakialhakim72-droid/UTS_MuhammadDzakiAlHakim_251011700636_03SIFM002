<nav class="navbar navbar-expand-lg navbar-dark navbar-kc">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">Kim'sCells</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuUtama"
            aria-controls="menuUtama" aria-expanded="false" aria-label="Buka menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuUtama">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('accessories.*') ? 'active' : '' }}" href="{{ route('accessories.index') }}">Produk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
