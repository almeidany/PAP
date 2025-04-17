<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

@include('layouts.backoffice.projects.head')

<body>
    <div id="main-wrapper">
        @include('layouts.backoffice.sidebar')
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical">
                    @include('layouts.backoffice.nav')
                </div>
            </header>
            <!--  Header End -->
            <div class="body-wrapper">
                <div class="datatables text-center">
                    <div class="card">
                        <div class="card-body">
                            @if(session()->has('message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ session('message') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                            @endif
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="px-0 text-muted text-center">Nome</th>
                                            <th scope="col" class="px-0 text-muted text-center">Nº Processo</th>
                                            <th scope="col" class="px-0 text-muted text-center">Turma</th>
                                            <th scope="col" class="px-0 text-muted text-center">Alergias</th>
                                            <th scope="col" class="px-0 text-muted text-center">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($members as $member)
                                        <tr>
                                            <td class="px-0">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    @if($member->photo)  <!-- Verifique se o campo se chama 'photo' ou 'foto' -->
                                                    <img src="{{ asset('storage/images/members/'.$member->photo) }}" 
                                                         class="rounded-circle" 
                                                         width="35"
                                                         alt="{{ $member->first_name }}"/>
                                                    @else
                                                    <img src="{{ asset('assets/images/profile/user-4.jpg') }}" 
                                                         class="rounded-circle" 
                                                         width="35"
                                                         alt="Default"/>
                                                    @endif
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 fw-bold">{{ $member->first_name }} {{ $member->last_name }}</h6>
                                                        <small class="text-muted">{{ \Carbon\Carbon::parse($member->birth_date)->format('d/m/Y') }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-0">{{ $member->schoolnumber }}</td>
                                            <td class="px-0">
                                                <span class="badge bg-info">{{ $member->class }}</span>
                                            </td>
                                            <td class="px-0 text-dark font-weight-medium">
                                                @if($member->food_allergies == 'sim')
                                                    <span class="badge bg-danger">Sim</span>
                                                @else
                                                    <span class="badge bg-success">Não</span>
                                                @endif
                                            </td>
                                            <td class="px-0">
                                                <form id="deleteMember{{ $member->id }}" action="{{route('members.destroy', $member->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                
                                                    <a href="{{ route('members.edit', $member->id) }}" class="btn btn-warning">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                
                                                    <a href="{{ route('members.show', $member->id) }}" class="btn btn-info">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end datatable -->  
            <div class="fixed-bottom-left">
                <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center" type="button"
                    onclick="window.location.href='{{ route('members.create') }}'">
                    <i class="bi bi-plus fs-7"></i>
                </button>
            </div>
            @include('layouts.backoffice.Settings_Script')
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- Import Js Files -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/sidebarmenu.js') }}"></script>
    
    <!-- highlight.js (code view) -->
    <script src="{{ asset('assets/js/highlights/highlight.min.js') }}"></script>
    <script>
        hljs.initHighlightingOnLoad();
    
        document.querySelectorAll("pre.code-view > code").forEach((codeBlock) => {
            codeBlock.textContent = codeBlock.innerHTML;
        });
    </script>
    <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboards/dashboard.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-basic.init.js') }}"></script>
</body>

</html>