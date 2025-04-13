<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="/assets/img/logo.png" alt="Logo" class="img-fluid">
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link">Página Inicial</a>
                    <a href="{{ route('contests') }}" class="nav-item nav-link">Concursos</a>
                    {{-- <a href="{{ route('projetos') }}" class="nav-item nav-link">Projetos</a> --}}
                    {{-- <a href="{{ route('gallery') }}" class="nav-item nav-link">Galeria</a> --}}
                    <a href="{{ route('about_us') }}" class="nav-item nav-link">Sobre Nós</a>
                </div>
            </div>
        </nav>
    </div>
</div>
