﻿<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

@include('layouts.backoffice.head')

<body>
    <div id="main-wrapper">
        @include('layouts.backoffice.sidebar')
        <div class="page-wrapper">
            <!-- Header Start -->
            <header class="topbar">
                <div class="with-vertical">
                    @include('layouts.backoffice.nav')
                </div>
            </header>
            <!-- Header End -->
            
            <div class="body-wrapper">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header text-bg-primary">
                            <h4 class="mb-0 text-white text-center">Criar Projeto</h4>
                        </div>
                        
                        <div class="card-body">
                            <form action="{{ route('projects.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row pt-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nome do Projeto</label>
                                            <input type="text" name="projectname" class="form-control @error('projectname') is-invalid @enderror" value="{{ old('projectname') }}" required>
                                            @error('projectname')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Designação</label>
                                            <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation') }}" required>
                                            @error('designation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Categoria</label>
                                            <select class="form-select @error('category') is-invalid @enderror" name="category" required>
                                                <option value="" disabled selected>Selecione uma categoria</option>
                                                @foreach ($categories as $index => $value)
                                                    <option value="{{ $index }}" @selected(old('category') == $index)>{{ $value }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Data de Início</label>
                                            <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}" required>
                                            @error('start_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Github</label>
                                            <input type="url" name="github_url" class="form-control @error('github_url') is-invalid @enderror" 
                                                   placeholder="https://github.com/utilizador/projeto"
                                                   value="{{ old('github_url') }}"
                                                   pattern="https:\/\/github\.com\/.+" required>
                                            @error('github_url')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Foto</label>
                                            <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="formFile">
                                            @error('photo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Descrição</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4" required>{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-actions text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Submeter</button>
                                    <a href="{{ route('projects') }}" class="btn btn-danger ms-2">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            @include('layouts.backoffice.Settings_Script')
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
</body>
</html>