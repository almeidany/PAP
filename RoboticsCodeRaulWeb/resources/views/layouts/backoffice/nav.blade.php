<nav class="navbar navbar-expand-lg p-0">
    <ul class="navbar-nav">
        <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
            <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                <i class="bi bi-list"></i>
            </a>
        </li>
    </ul>
    <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)"
        data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="bi bi-plus"></i>
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <div class="d-flex align-items-center justify-content-between">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                <!-- ------------------------------- -->
                <!-- start language Dropdown -->
                <!-- ------------------------------- -->
                <li class="nav-item nav-icon-hover-bg rounded-circle">
                    <a class="nav-link moon dark-layout" href="javascript:void(0)">
                        <i class="bi bi-moon"></i>
                    </a>
                    <a class="nav-link sun light-layout" href="javascript:void(0)">
                        <i class="bi bi-sun"></i>
                    </a>
                </li>
                <li class="bi bi-translate nav-item nav-icon-hover-bg rounded-circle dropdown">
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <div class="message-body">
                            <a href="javascript:void(0)"
                                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/images/svgs/icon-flag-en.svg') }}" alt="modernize-img" width="20px"
                                        height="20px" class="rounded-circle object-fit-cover round-20">
                                </div>
                                <p class="mb-0 fs-3">English (UK)</p>
                            </a>
                            <a href="javascript:void(0)"
                                class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/images/svgs/icon-flag-pt.svg') }}" alt="modernize-img" width="20px"
                                        height="20px" class="rounded-circle object-fit-cover round-20">
                                </div>
                                <p class="mb-0 fs-3">Português (Portugal)</p>
                            </a>
                        </div>
                    </div>
                </li>
                <!-- ------------------------------- -->
                <!-- end language Dropdown -->
                <!-- ------------------------------- -->

                <!-- ------------------------------- -->
                <!-- start profile Dropdown -->
                <!-- ------------------------------- -->
                <li class="nav-item dropdown">
                    <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="user-profile-img">
                                <img src="{{ asset('assets/images/profile/user-1.jpg') }}" class="rounded-circle" width="35"
                                    height="35" alt="modernize-img">
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                        aria-labelledby="drop1">
                        <div class="profile-dropdown position-relative" data-simplebar="">
                            <div class="py-3 px-7 pb-0">
                                <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                            </div>
                            <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                <img src="{{ asset('assets/images/profile/user-1.jpg') }}" class="rounded-circle" width="80"
                                    height="80" alt="modernize-img">
                                <div class="ms-3">
                                    <h5 class="mb-1 fs-3">
                                        {{-- @if (Auth::check())
                                            {{ Auth::user()->name }}
                                        @else
                                            <script>
                                                window.location.href = "{{ route('login') }}";
                                            </script>
                                        @endif --}}
                                    </h5>
                                    <span class="mb-1 d-block">Dev/Designer</span>
                                    <p class="mb-0 d-flex align-items-center gap-2">
                                        <i class="bi bi-envelope"></i>
                                        {{-- @if (Auth::check())
                                            {{ Auth::user()->email }}
                                        @else
                                            <script>
                                                window.location.href = "{{ route('login') }}";
                                            </script>
                                        @endif --}}
                                    </p>
                                </div>                                    
                            </div>
                            <div class="message-body">
                                <a href="{{ route('account') }}" class="py-8 px-7 mt-8 d-flex align-items-center">
                                    <span
                                        class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                        <img src="{{ asset('assets/images/svgs/icon-account.svg') }}" alt="modernize-img"
                                            width="24" height="24">
                                    </span>
                                    <div class="w-100 ps-3">
                                        <h6 class="mb-1 fs-3 fw-semibold lh-base">Meu Perfil</h6>
                                        <span class="fs-2 d-block text-body-secondary">Defenições da Conta</span>
                                    </div>
                                </a>
                            </div>
                            <div class="text-center py-4 px-7 pt-8">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ------------------------------- -->
                <!-- end profile Dropdown -->
                <!-- ------------------------------- -->
            </ul>
        </div>
    </div>
</nav>