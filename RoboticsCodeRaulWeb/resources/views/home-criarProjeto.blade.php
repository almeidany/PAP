<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

@include('layouts.headHome')

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
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header text-bg-primary">
                            <h4 class="mb-0 text-white" style="text-align: center">Criar Projeto</h4>
                        </div>
                        <form action="#">
                            <div>
                                <div>
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Nome do Projeto</label>
                                                    <input type="text" id="projectName" class="form-control"
                                                        placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3 has-danger">
                                                    <label class="form-label">Designação</label>
                                                    <input type="text" id="projectDesignation"
                                                        class="form-control form-control-danger" placeholder=""
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3 has-success">
                                                    <label class="form-label">SUBSTITUIR POR SELECT2</label>
                                                    <select class="form-select" required>
                                                        <option value="Categoria 1">Categoria 1</option>
                                                        <option value="Categoria 2">Categoria 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Data de Início do Projeto</label>
                                                    <input type="date" class="form-control" id="projectDate" required
                                                        readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3 has-success">
                                                    <label for="projectGithub" class="form-label">Github</label>
                                                    <input type="url" class="form-control" id="projectGithub"
                                                        placeholder="Insira o link do github do projeto"
                                                        pattern="https:\/\/github\.com\/[^\s]+"
                                                        title="O link deve começar com 'https://github.com/' e ser seguido por um repositório válido."
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3 has-success">
                                                    <label class="form-label">SUBSTITUIR POR SELECT2</label>
                                                    <select class="form-select" required>
                                                        <option value="Categoria 1">Categoria 1</option>
                                                        <option value="Categoria 2">Categoria 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Descrição ocupando o espaço onde estava 'Categorias' -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Descrição</label>
                                                    <textarea class="form-control" id="projectDescription" rows="4" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Centralizar botões -->
                                        <div class="form-actions text-center">
                                            <button type="submit" class="btn btn-primary">Submeter</button>
                                            <button type="button"
                                                class="btn bg-danger-subtle text-danger ms-2">Cancelar</button>
                                        </div>

                                    </div>
                                </div>
                        </form>
                    </div>
                </div>

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
