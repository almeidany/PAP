<!DOCTYPE html>
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
                            <h4 class="mb-0 text-white text-center">Adicionar Aluno</h4>
                        </div>
                        
                        <div class="card-body">
                            <form action="{{ route('members.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row pt-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Primeiro Nome</label>
                                            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" 
                                                   value="{{ old('first_name') }}" required>
                                            @error('first_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Último Nome</label>
                                            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" 
                                                   value="{{ old('last_name') }}" required>
                                            @error('last_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Número de Processo</label>
                                            <input type="text" name="schoolnumber" class="form-control @error('schoolnumber') is-invalid @enderror" 
                                                   value="{{ old('schoolnumber') }}" required>
                                            @error('schoolnumber')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Data de Nascimento</label>
                                            <input type="date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" 
                                                   value="{{ old('birth_date') }}" required>
                                            @error('birth_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                                                   value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Número de Telefone</label>
                                            <input type="tel" name="phonenumber" class="form-control @error('phonenumber') is-invalid @enderror" 
                                                   value="{{ old('phonenumber') }}" required>
                                            @error('phonenumber')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Turma</label>
                                            <select class="form-select @error('class') is-invalid @enderror" name="class" required>
                                                <option value="" disabled selected>Escolha sua turma</option>
                                                @foreach ($classes as $index => $value)
                                                    <option value="{{ $index }}" @selected(old('class') == $index)>{{ $value }}</option>
                                                @endforeach
                                            </select>
                                            @error('class')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tamanho da T-shirt</label>
                                            <select class="form-select @error('tshirt_size') is-invalid @enderror" name="tshirt_size" required>
                                                <option value="" disabled selected>Escolha o tamanho da T-shirt</option>
                                                @foreach ($sizes as $index => $value)
                                                    <option value="{{ $index }}" @selected(old('tshirt_size') == $index)>{{ $value }}</option>
                                                @endforeach
                                            </select>
                                            @error('tshirt_size')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Alergias Alimentares</label>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="food_allergies" value="sim" @checked(old('food_allergies') == 'sim') required>
                                                    <label class="form-check-label" for="alergiasSim">Sim</label>
                                                </div>
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="food_allergies" value="nao" @checked(old('food_allergies') == 'nao') required>
                                                    <label class="form-check-label" for="alergiasNao">Não</label>
                                                </div>
                                            </div>
                                            @error('food_allergies')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tenho autorização de imagem?</label>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="image_authorization" value="sim" @checked(old('image_authorization') == 'sim') required>
                                                    <label class="form-check-label">Sim</label>
                                                </div>
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="image_authorization" value="nao" @checked(old('image_authorization') == 'nao') required>
                                                    <label class="form-check-label">Não</label>
                                                </div>
                                            </div>
                                            @error('image_authorization')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Se sim, indique as alergias aqui</label>
                                            <textarea class="form-control @error('allergies_description') is-invalid @enderror" name="allergies_description" rows="3">{{ old('allergies_description') }}</textarea>
                                            @error('allergies_description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Foto de Perfil</label>
                                            <input type="file" class="form-control @error('profile_photo') is-invalid @enderror" name="profile_photo">
                                            @error('profile_photo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="form-actions text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Submeter</button>
                                    <a href="{{ route('members') }}" class="btn btn-danger ms-2">Cancelar</a>
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