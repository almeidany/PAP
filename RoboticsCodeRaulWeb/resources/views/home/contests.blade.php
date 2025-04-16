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
            <div class="col-lg-6 align-self-end text-center text-lg-end">
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Service Start -->
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Concursos em que Participamos
                </div>
                <h1 class="mb-4">Desafios e Competições de Robótica: Mostre o Seu Potencial!</h1>
                <p class="mb-4">Participe em concursos de robótica por todo o país e ponha à prova as suas
                    competências!
                    Estas competições incentivam a criatividade, o raciocínio lógico e a inovação. Terá a
                    oportunidade
                    de competir com equipas de várias escolas, enfrentar desafios reais e destacar-se no panorama da
                    robótica escolar em Portugal. Prepare-se para se superar e mostrar todo o seu potencial!</p>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="/assets/img/botolympics.png" class="img-fluid"
                                            style="max-width: 100%; height: auto;">
                                    </div>
                                    <h5 class="mb-3">BotOlympics</h5>
                                    <p>O BotOlympics é um concurso nacional onde equipas constroem robôs para
                                        cumprir
                                        desafios específicos, como resgates e corridas, testando a precisão e
                                        criatividade dos participantes.</p>
                                    <a class="btn px-3 mt-auto mx-auto" href="https://botolympics.pt/"
                                        target="_blank">Veja Mais</a>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="/assets/img/FestivalNacionaldaRobotica.png" class="img-fluid"
                                            style="max-width: 100%; height: auto;">
                                    </div>
                                    <h5 class="mb-3">Festival Nacional da Robótica</h5>
                                    <p>Competição anual onde equipas constroem e programam robôs para resolver
                                        desafios,
                                        promovendo o desenvolvimento de habilidades em ciência e tecnologia.</p>
                                    <a class="btn px-3 mt-auto mx-auto"
                                        href="https://www.festivalnacionalrobotica.pt/2024-1/" target="_blank">Veja
                                        Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pt-md-4">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="/assets/img/OlimpiadasDaRobotica.png" class="img-fluid"
                                            style="max-width: 100%; height: auto;">
                                    </div>
                                    <h5 class="mb-3">Olimpiadas da Robótica</h5>
                                    <p>Competição escolar onde alunos constroem robôs para enfrentar desafios como
                                        resgates e corridas, promovendo o aprendizado prático e o trabalho em
                                        equipa.
                                    </p>
                                    <a class="btn px-3 mt-auto mx-auto" href="https://olimpiadasderobotica.anpri.pt/"
                                        target="_blank">Veja Mais</a>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="/assets/img/Roboparty.png" class="img-fluid"
                                            style="max-width: 100%; height: auto;">
                                    </div>
                                    <h5 class="mb-3">Roboparty</h5>
                                    <p>Evento de robótica em que os participantes criam robôs para resolver desafios
                                        em
                                        tempo real, estimulando a criatividade e a inovação.</p>
                                    <a class="btn px-3 mt-auto mx-auto" href="https://www.roboparty.org/"
                                        target="_blank">Veja Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Service End -->

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
