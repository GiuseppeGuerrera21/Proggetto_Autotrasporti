<nav class="navbar navbar-expand-lg bg-body-tertiary py-0">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">
            <img src="media/LogoLeonardo3NoBG.png" alt="Logo" width="300" height="170">
        </a>
        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item border-0 border-end border-dark">
                        <a class="nav-link fw-bold active" aria-current="page" href="{{ route('home')}}">HOME</a>
                    </li>
                    <li class="nav-item border-0 border-end border-dark">
                        <a class="nav-link fw-bold" href="{{ route('aboutUs')}}">CHI SIAMO</a>
                    </li>
                    <li class="nav-item border-0 border-end border-dark">
                        <a class="nav-link fw-bold" href="{{ route('service')}}">AREE SERVITE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{route('contact')}}">PREVENTIVO</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>