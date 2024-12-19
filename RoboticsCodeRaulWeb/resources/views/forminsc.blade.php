<!DOCTYPE html>
<html lang="pt-PT">

@include('layouts.head')

<body>
    <!-- Navbar Start -->
    @include('layouts.nav')
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
        </div>
    </div>
    <!-- Hero End -->


    <!-- Formulário de Inscrição Start -->
    <div class="container">
        <form method="post" action="">
            <h2 class="my-4">Dados Pessoais</h2>
            <div class="row mb-3">
                <div class="col-5">
                    <label for="nome" class="form-label">Primeiro Nome</label>
                    <input type="text" class="form-control" id="nome" required>
                </div>
                <div class="col-4">
                    <label for="nome" class="form-label">Apelido</label>
                    <input type="text" class="form-control" id="nome" required>
                </div>
                <div class="col-3">
                    <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dataNascimento" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="col-6">
                    <label for="telefone" class="form-label">Número de Telefone</label>
                    <input type="tel" class="form-control" id="telefone" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <label for="numprocesso" class="form-label">Número de Processo Escolar</label>
                    <input type="text" class="form-control" id="numprocesso" required>
                </div>
                <div class="col-6">
                    <label for="datainsc" class="form-label">Data de Inscrição</label>
                    <input type="date" id="datainsc" name="datainsc" class="form-control" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <label for="turma" class="form-label">Turma</label>
                    <select class="form-select" id="turma" required>
                        <option selected disabled>Escolha sua turma</option>
                        <option value="turma1">Turma 1</option>
                        <option value="turma2">Turma 2</option>
                        <option value="turma3">Turma 3</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="tshirt" class="form-label">Tamanho da T-shirt</label>
                    <select class="form-select" id="tshirt" required>
                        <option selected disabled>Escolha o tamanho da T-shirt</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-6">
                        <label>Alergias Alimentares</label>
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="alergiasSim" name="alergias"
                                    value="sim">
                                <label class="form-check-label" for="alergiasSim">Sim</label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="alergiasNao" name="alergias"
                                    value="nao" checked>
                                <label class="form-check-label" for="alergiasNao">Não</label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="alergiasOutros" name="alergias"
                                    value="outros">
                                <label class="form-check-label" for="alergiasOutros">Outros</label>
                            </div>
                        </div>
                        <input type="text" class="form-control mt-2" id="alergiasOutrosDescricao"
                            placeholder="Descreva suas alergias alimentares" style="display: none;">
                    </div>
                    <div class="col-6">
                        <label>Tenho autorização de imagem?</label>
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="autorizacaoSim"
                                    name="autorizacao" value="sim" required>
                                <label class="form-check-label" for="autorizacaoSim">Sim</label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="autorizacaoNao"
                                    name="autorizacao" value="nao" required>
                                <label class="form-check-label" for="autorizacaoNao">Não</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="beneficio" class="form-label">Se selecionou "outros", por favor indique-as
                        aqui:</label>
                    <textarea class="form-control" id="beneficio" rows="3" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="FotodePerfil">Selecione uma foto</label>
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="FotodePerfil">
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Formulário de Inscrição End -->
            @include('layouts.footer')
            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i
                    class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="/assets/lib/wow/wow.min.js"></script>
            <script src="/assets/lib/easing/easing.min.js"></script>
            <script src="/assets/lib/wow/wow.min.js"></script>
            <script src="/assets/lib/owlcarousel/owl.carousel.min.js""></script>

            <!-- Template Javascript -->
            <script src="/assets/js/main.js"></script>
            <script src="/assets/js/forminsc.js"></script>
            <script src="/assets/js/datainsc.js"></script>
</body>

</html>
