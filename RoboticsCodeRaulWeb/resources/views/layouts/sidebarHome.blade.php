<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
            <img src="/assets/img/logo.png" alt="Logo" class="img-fluid" style="max-height: 100px;">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- User Info -->
    <li class="nav-item d-flex align-items-center">
        <a class="nav-link" href="#">
            <i class="fas fa-user"></i>
            <span>User</span>
        </a>
        <form method="POST" action="{{ route('logout') }}" style="margin-left: auto; margin-right: 10px;">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Terminar Sessão</button>
        </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Notícias -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-newspaper"></i>
            <span>Notícias</span>
        </a>
    </li>

    <!-- Nav Item - Eventos -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-clock"></i>
            <span>Eventos</span>
        </a>
    </li>

    <!-- Nav Item - Equipa -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-users"></i>
            <span>Equipa</span>
        </a>
    </li>

    <!-- Nav Item - Projetos -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home-projetos') }}">
            <i class="fas fa-book"></i>
            <span>Projetos</span>
        </a>
    </li>

    <!-- Nav Item - Presenças -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-user-check"></i>
            <span>Presenças</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Ferramentas de Administrador
    </div>

    <!-- Nav Item - Publicar Notícias -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-plus"></i>
            <span>Publicar Notícias</span>
        </a>
    </li>

    <!-- Nav Item - Publicar Eventos -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-plus"></i>
            <span>Publicar Eventos</span>
        </a>
    </li>

    <!-- Nav Item - Gestão de Equipas -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-plus"></i>
            <span>Gestão de Equipas</span>
        </a>
    </li>
</ul>
<!-- End of Sidebar -->
