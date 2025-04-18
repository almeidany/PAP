<aside class="left-sidebar with-vertical">
    <div>
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
                <img src="{{ asset('assets/img/logo.png') }}" class="dark-logo d-block" alt="Logo-Dark" style="max-width: 150px;">
                <img src="{{ asset('assets/img/logo-light.png') }}" class="light-logo d-none" alt="Logo-light" style="max-width: 150px;">
            </a>
            <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                <i class="ti ti-cross"></i>
            </a>
        </div>

        <!-- Sidebar Start -->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('access') }}" aria-expanded="false">
                        <span class="d-flex">
                            <i class="bi bi-info"></i>
                        </span>
                        <span class="hide-menu">Acessos</span>
                    </a>
                    <a class="sidebar-link" href="{{ route('home') }}" aria-expanded="false" target="_blank">
                        <span class="d-flex">
                            <i class="bi bi-house-door"></i>
                        </span>
                        <span class="hide-menu">Homepage</span>
                    </a>
                    <a class="sidebar-link" href="{{ route('members') }}" aria-expanded="false">
                        <span class="d-flex">
                            <i class="bi bi-people"></i>
                        </span>
                        <span class="hide-menu">Membros</span>
                    </a>
                    <a class="sidebar-link" href="{{ route('news') }}" aria-expanded="false">
                        <span class="d-flex">
                            <i class="bi bi-newspaper"></i>
                        </span>
                        <span class="hide-menu">Noticias</span>
                    </a>
                    <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                        <span class="d-flex">
                            <i class="bi bi-pin-angle"></i>
                        </span>
                        <span class="hide-menu">Página Inicial</span>
                    </a>
                    <a class="sidebar-link" href="{{ route('projects') }}" aria-expanded="false">
                        <span class="d-flex">
                            <i class="bi bi-box-seam"></i>
                        </span>
                        <span class="hide-menu">Projetos</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="{{ asset('assets/images/profile/user-1.jpg') }}" class="rounded-circle" width="40" height="40" alt="modernize-img">
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">
                        @if (Auth::check())
                            {{ Auth::user()->name }}
                        @else
                            <script>
                                window.location.href = "{{ route('login') }}";
                            </script>
                        @endif
                    </h6>
                    <span class="fs-2">Dev/Designer</span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="bi bi-power"></i>
                </button>
            </div>
        </div>
    </div>
</aside>
<!--  Sidebar End -->