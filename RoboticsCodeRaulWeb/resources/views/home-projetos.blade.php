<!DOCTYPE html>
<html lang="pt-PT">

@include('layouts.headHome')
<link rel="stylesheet" href="{{ asset('assets/css/homeProjetos.css') }}">

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.sidebarHome')


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->

                    <!-- Search Bar -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <form class="d-flex"">
                                <input class="form-control me-2" type="search" placeholder="Pesquisar"
                                    aria-label="Pesquisar">
                                <button class="btn btn-primary" type="submit ">Pesquisar</button>
                            </form>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Your content goes here -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Adicione aqui os elementos que deseja exibir na página -->
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Botão flutuante -->
    <button id="addProjectBtn"
        style="position: fixed; bottom: 20px; right: 20px; width: 56px; height: 56px; border-radius: 50%; background-color: #007bff; color: white; font-size: 24px; border: none; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); cursor: pointer;">
        +
    </button>

    <!-- Modal do formulário -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h4>Novo Projeto</h4>
            <form id="projectForm">
                <div class="mb-3">
                    <label for="projectID" class="form-label">Nome do Projeto</label>
                    <input type="text" class="form-control" id="nomeProjeto" placeholder="Insira o nome do projeto">
                    <div class="mb-3">
                        <label for="projectName" class="form-label">Designação</label>
                        <input type="text" class="form-control" id="projectName"
                            placeholder="Insira a designação do projeto">
                    </div>
                    <div class="mb-3">
                        <label for="projectCategory" class="form-label">Categoria</label>
                        <select class="form-control" id="projectCategory">
                            <option value="" selected disabled>Selecione uma Categoria</option>
                            <option value="Categoria 1">Categoria 1</option>
                            <option value="Categoria 2">Categoria 2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="projectResponsibles" class="form-label">Aluno(s) Responsável(eis)</label>
                        <input type="text" class="form-control" id="projectResponsibles"
                            placeholder="Insira o(s) aluno(s) responsável(eis)">
                    </div>
                    <div class="mb-3">
                        <label for="projectDate" class="form-label">Data de Início do Projeto</label>
                        <input type="text" class="form-control" id="projectDate" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="projectGithub" class="form-label">Github</label>
                        <input type="text" class="form-control" id="projectGithub"
                            placeholder="Insira o link do github do projeto">
                    </div>
                    <div class="mb-3">
                        <label for="projectDescription" class="form-label">Descrição</label>
                        <textarea class="form-control" id="projectDescription" rows="3" placeholder="Descrição breve"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="projectPhotos" class="form-label">Fotos</label>
                        <input type="file" class="form-control" id="projectPhotos" multiple>
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn btn-primary">Adicionar Projeto</button>
                        <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancelar</button>
                    </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/js/projectsForm.js') }}"></script>
