<!DOCTYPE html>
<html lang="en">

@include('layouts.headError')

<body>

    @include('layouts.nav')

    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- 404 Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">Erro 404</h1>
                    <h1 class="mb-4">Página não encontrada</h1>
                    <p class="mb-4">Pedimos desculpa, mas a página que tentou procurar não existe no nosso site,
                        pondere
                        em usar a barra de pesquisa para encontrar uma existente.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('index') }}">Voltar à página
                        inicial</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <h1>
                            <img src="img/logo.png" alt="Logo" class="img-fluid" style="max-height: 100px;">
                        </h1>
                    </a>
                    <p class="mb-0">Robotics Code Raul: Incentivando a inovação e o aprendizado através da tecnologia
                        e
                        da robótica.</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Entre em Contacto Conosco</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>R. Dom João II 33, 2500-852 Caldas<span
                            style="text-indent: 28px; display: inline-block;"> da Rainha</span></p>
                    <p><i class="fa fa-phone-alt me-3"></i>262 740 560</p>
                    <p><i class="fa fa-envelope me-3"></i>clube.robotica@aerp.pt</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://linktr.ee/RoboticsCodeRaul/"
                            target="_blank"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4">Páginas Populares</h5>
                    <a class="btn btn-link" href="">Formulário de Inscrição</a>
                    <a class="btn btn-link" href="">Sobre Nós</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Outros Links</h5>
                    <a class="btn btn-link" href="https://aerp.pt/" target="_blank">Portal da Escola</a>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; Robotics Code Raul, Todos os direitos reservados.

                        Projetado por Tiago Almeida e Luís Fernandes. Distribuido por
                        <a class="border-bottom" href="https://aerp.pt" target="_blank">AERP</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.html">Página Inicial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
