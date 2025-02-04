<!DOCTYPE html>
<html lang="pt-PT">

@include('layouts.headHome')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.sidebarHome')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->

                    <!-- Search Bar -->
                    <div class="row mb-4">
                        <div class="col-md-12 d-flex justify-content-center">
                            <form class="d-flex" style="width: 50%; margin-bottom: 10px;">
                                <input class="form-control me-2" type="search" placeholder="Pesquisar"
                                    aria-label="Pesquisar" style="margin-top: 20px;">
                                <button class="btn btn-primary" style="margin-top:20px"
                                    type="submit ">Pesquisar</button>
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
