<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

@include('layouts.backoffice.news.head')

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
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <strong>{{ session('message') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="news-grid">
                    @foreach ($news as $item)
                        <div class="news-card">
                            <div class="news-card-header">
                                <img class="news-image" src="{{ asset('storage/images/news/' . $item->photo) }}">
                            </div>
                            <div class="news-card-body">
                                <h3 class="news-title">{{ Str::limit($item->title, 50) }}</h3>
                                <div class="news-meta">
                                    <span class="news-author">{{ $item->author_user }}</span>
                                    <span class="news-date">
                                        {{ $item->news_date ? \Carbon\Carbon::parse($item->news_date)->format('d/m/Y') : '' }}
                                    </span>
                                </div>
                            </div>
                            <div class="news-card-footer" style="justify-content: center; ">
                                <a href="{{ route('news.edit', $item->id) }}" class="btn btn-sm btn-outline-primary"
                                    title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{ route('news.show', $item->id) }}" class="btn btn-sm btn-outline-secondary"
                                    title="Ver Notícia Completa" target="_blank">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <form action="{{ route('news.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Apagar"
                                        onclick="return confirm('Tem certeza que deseja apagar esta notícia?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Paginação -->
                <div class="news-pagination">
                    {{ $news->links() }}
                </div>
            </div>

            <style>
                .news-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                    gap: 20px;
                    padding: 20px;
                }

                .news-card {
                    border: 1px solid #e0e0e0;
                    border-radius: 8px;
                    overflow: hidden;
                    display: flex;
                    flex-direction: column;
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }

                .news-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                }

                .news-card-header {
                    height: 160px;
                    background-color: #f5f5f5;
                    position: relative;
                }

                .news-image {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                .news-image-placeholder {
                    width: 100%;
                    height: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #ccc;
                    font-size: 48px;
                }

                .news-card-body {
                    padding: 15px;
                    flex-grow: 1;
                }

                .news-title {
                    font-size: 1.1rem;
                    margin-bottom: 10px;
                    color: #333;
                }

                .news-meta {
                    display: flex;
                    justify-content: space-between;
                    font-size: 0.85rem;
                    color: #666;
                }

                .news-card-footer {
                    padding: 10px 15px;
                    border-top: 1px solid #eee;
                    display: flex;
                    justify-content: flex-end;
                    gap: 10px;
                }

                .news-pagination {
                    padding: 20px;
                    display: flex;
                    justify-content: center;
                }

                @media (max-width: 768px) {
                    .news-grid {
                        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
                    }
                }

                @media (max-width: 480px) {
                    .news-grid {
                        grid-template-columns: 1fr;
                    }
                }
            </style>
            <!-- Div para o botão no canto inferior esquerdo -->
            <div class="fixed-bottom-left">
                <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center"
                    type="button" onclick="window.location.href='{{ route('news.create') }}'">
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
</body>

</html>
