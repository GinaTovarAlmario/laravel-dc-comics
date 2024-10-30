<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="{{ Vite::asset('resources/img/bts-logo.png') }}" width="45" class="d-inline-block align-top" alt="">
                </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('home')) active @endif" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('teams.index')) active @endif" href="{{ route('albums.index') }}">Albums</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
