<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/navbar-logo.svg') }}" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('populasi*') || Request::is('pernikahan*') || Request::is('perceraian*') || Request::is('kelahiran*') ? 'active' : '' }}"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Peta tematik
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item {{ Request::is('populasi*') ? 'active' : '' }}" href="/populasi">Kepadatan penduduk</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ Request::is('pernikahan*') ? 'active' : '' }}" href="/pernikahan">Pernikahan</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ Request::is('perceraian*') ? 'active' : '' }}" href="/perceraian">Perceraian</a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ Request::is('kelahiran*') ? 'active' : '' }}" href="/kelahiran">Kelahiran</a>
                        </li>                        
                        {{-- <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>