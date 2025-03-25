<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

@include('layouts.headProjetos')

<body>
    <div id="main-wrapper">
        @include('layouts.sidebarHome')
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical">
                    @include('layouts.nav_Home')
                </div>
            </header>
            <!--  Header End -->
            <div class="body-wrapper">


            </div>
            <!-- Div para o botão no canto inferior esquerdo -->
            <div class="fixed-bottom-left">
                <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center" type="button"
                    onclick="window.location.href='{{ route('home-adicionarAluno') }}'">
                    <i class="bi bi-plus fs-7"></i>
                </button>
            </div>
            @include('layouts.Settings&Script')
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script src="./assets/js/vendor.min.js"></script>
    <!-- Import Js Files -->
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="./assets/js/theme/app.init.js"></script>
    <script src="./assets/js/theme/theme.js"></script>
    <script src="./assets/js/theme/app.min.js"></script>
    <script src="./assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
    <script src="./././npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>

    <!-- highlight.js (code view) -->
    <script src="./assets/js/highlights/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();


        document.querySelectorAll("pre.code-view > code").forEach((codeBlock) => {
            codeBlock.textContent = codeBlock.innerHTML;
        });
    </script>
    <script src="./assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./assets/js/dashboards/dashboard.js"></script>
</body>

</html>