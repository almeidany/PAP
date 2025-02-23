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
                            <h4 class="mb-0 text-white">Other Sample form</h4>
                        </div>
                        <form action="#">
                            <div>
                                <div>
                                    <div class="card-body">
                                        <h4 class="card-title">Person Info</h4>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Nome do Projeto</label>
                                                    <input type="text" id="projectName" class="form-control"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3 has-danger">
                                                    <label class="form-label">Designação</label>
                                                    <input type="text" id="lastName"
                                                        class="form-control form-control-danger" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3 has-success">
                                                    <label class="form-label">SUBSTITUIR POR SELECT2</label>
                                                    <select class="form-select">
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
                                                <div class="mb-3">
                                                    <label class="form-label">Data de Início do Projeto</label>
                                                    <input type="date" class="form-control" id="projectDate" required
                                                        readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="projectGithub" class="form-label">Github</label>
                                                    <input type="url" class="form-control" id="projectGithub"
                                                        placeholder="Insira o link do github do projeto"
                                                        pattern="https:\/\/github\.com\/[^\s]+"
                                                        title="O link deve começar com 'https://github.com/' e ser seguido por um repositório válido.">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Membership</label>
                                                    <div class="form-check py-1">
                                                        <input type="radio" id="customRadio11" name="customRadio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="customRadio11">Free</label>
                                                    </div>
                                                    <div class="form-check py-1">
                                                        <input type="radio" id="customRadio22" name="customRadio"
                                                            class="form-check-input">
                                                        <label class="form-check-label" for="customRadio22">Paid</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Address</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Street</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">City</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">State</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Post Code</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Country</label>
                                                        <select class="form-select">
                                                            <option>--Select your Country--</option>
                                                            <option>India</option>
                                                            <option>Sri Lanka</option>
                                                            <option>USA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <div class="card-body border-top">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button"
                                                    class="btn bg-danger-subtle text-danger ms-6">Cancel</button>
                                            </div>
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
