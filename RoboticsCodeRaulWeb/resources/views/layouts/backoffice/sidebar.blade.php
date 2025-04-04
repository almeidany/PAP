<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
    integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<aside class="left-sidebar with-vertical">
    <div><!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="text-nowrap logo-img">
                <img src="./assets/img/logo.png" class="dark-logo d-block" alt="Logo-Dark" style="max-width: 150px;">
                <img src="./assets/img/logo-light.png" class="light-logo d-none" alt="Logo-light"
                    style="max-width: 150px;">
            </a>
            <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                <i class="ti ti-cross"></i>
            </a>
        </div>

        <!-- Sidebar Start -->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('index') }}" aria-expanded="false" target="_blank">
                        <span class="d-flex">
                            <i class="bi bi-house-door"></i>
                        </span>
                        <span class="hide-menu">Página Inicial</span>
                    </a>
                    <a class="sidebar-link" href="{{ route('index') }}" aria-expanded="false" span class="d-flex">
                        <i class="bi bi-house-door"></i>
                        </span>
                        <span class="hide-menu">Homepage</span>
                    </a>
                    <!-- ---------------------------------- -->
                    <!-- PAGES -->
                    <!-- ---------------------------------- -->
                    {{-- <li class="sidebar-item">
                    <a class="sidebar-link" href="page-account-settings.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-circle"></i>
                        </span>
                        <span class="hide-menu">Account Setting</span>
                    </a>
                </li> --}}
                    <a class="sidebar-link" href="{{ route('home-projetos') }}" aria-expanded="false">
                        <span class="d-flex">
                            <i class="bi bi-box-seam"></i>
                        </span>
                        <span class="hide-menu">Projetos</span>
                    </a>
                    <a class="sidebar-link" href="{{ route('home-alunos') }}" aria-expanded="false">
                        <span class="d-flex">
                            <i class="bi bi-people"></i>
                        </span>
                        <span class="hide-menu">Alunos</span>
                    </a>
                    <a class="sidebar-link" href="{{ route('index') }}" aria-expanded="false">
                        <span class="d-flex">
                            <i class="bi bi-info"></i>
                        </span>
                        <span class="hide-menu">Acessos</span>
                    </a>
                    <a class="sidebar-link" href="{{ route('home-noticias') }}" aria-expanded="false">
                        <span class="d-flex">
                            <i class="bi bi-newspaper"></i>
                        </span>
                        <span class="hide-menu">Noticias</span>
                    </a>
        </nav>
        <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="./assets/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40"
                        alt="modernize-img">
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                    <span class="fs-2">Designer</span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                    aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </div>
        </div>
    </div>
</aside>
<!--  Sidebar End -->
