<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Robotics Code Raul</title>

    @include('layouts.icon')

    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
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
                <a class="nav-link" href="#">
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

            <!-- Nav Item - Adicionar Projetos -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-plus"></i>
                    <span>Adicionar Projetos</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                                <img class="img-profile rounded-circle" src="{{ asset('img/user.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="{{ route('logout') }}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Terminar Sessão
                                </a> --}}
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->

                    <!-- Search Bar -->
                    <div class="row mb-4">
                        <div class="col-md-12 d-flex justify-content-center">
                            <form class="d-flex" style="width: 50%; margin-bottom: 10px;">
                                <input class="form-control me-2" type="search" placeholder="Pesquisar"
                                    aria-label="Pesquisar">
                                <button class="btn btn-primary" type="submit">Pesquisar</button>
                            </form>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Your content goes here -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Adicione aqui os elementos que deseja exibir na página -->
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
