<!DOCTYPE html>
<html lang="pt-PT">

@include('layouts.frontoffice.head')

<body>
    <!-- Navbar Start -->
    @include('layouts.frontoffice.nav')
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
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

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="HP_img2">
                        <iframe width="500" height="350"
                            src="https://www.google.com/maps/embed?pb=!4v1697040731234!6m8!1m7!1sJF74N4lm4BkqoeLhX_s8iA!2m2!1d39.4103554!2d-9.1456658!3f90!4f34.37!5f0.7820865974627469"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Um Pouco Mais Sobre a Nossa
                        História</div>
                    <h1 class="mb-4">Do Ensino à Excelência em Robótica Educativa</h1>
                    <p class="mb-4">O Clube de Programação e Robótica – Robotics Code Raul – está sediado na Escola
                        Secundária
                        Raul Proença e dedica-se ao desenvolvimento de competências tecnológicas e de programação
                        entre os alunos. Em funcionamento desde o ano letivo de 2016-2017, quando foi oficialmente
                        registado na base de dados da Direção-Geral de Educação (DGE), tem vindo a crescer tanto no
                        número de participantes quanto na qualidade dos projetos desenvolvidos.
                        Através da criação de projetos e da participação em competições nacionais de robótica, o
                        clube promove o pensamento crítico, a criatividade e a colaboração, preparando os jovens
                        para os desafios do futuro e incentivando a excelência na área da robótica educativa. Nos
                        últimos anos, tem alcançado resultados de destaque, com participações e prémios em diversas
                        competições a nível nacional.
                        Atualmente, conta com trinta alunos inscritos no clube, com idades entre os 13 e os 19 anos e
                        tem como principais objetivos: investigar e o desenvolver projetos envolvendo robôs e
                        circuitos eletrónicos; proporcionar a aprendizagem de conceitos fundamentais de
                        programação, de forma lúdica e participar e dinamizar iniciativas que se enquadrem no uso
                        das Linguagens de Programação e Robótica, nomeadamente, workshops e concursos nacionais
                        de programação e robótica. É também, nosso objetivo que todos os alunos do clube tenham a
                        oportunidade de participar, todos os anos, em pelo menos um concurso nacional de
                        programação e robótica.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    @include('layouts.frontoffice.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i
            class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
