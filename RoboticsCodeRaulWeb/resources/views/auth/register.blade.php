<!DOCTYPE html>
<html>

@include('layouts.register.head')

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
    
        <!-- Formulário de Registro -->
        <div class="signup">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="chk" aria-hidden="true">Registar</label>
            
                <!-- Primeiro Nome -->
                <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" placeholder="Primeiro Nome" required class="mb-3 form-field">
                @error('first_name')
                    <p class="label-error" style="margin-left: 10px; color: red;">{{ $message }}</p>
                @enderror
            
                <!-- Último Nome -->
                <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder="Último Nome" required class="mb-3 form-field">
                @error('last_name')
                    <p class="label-error" style="margin-left: 10px; color: red;">{{ $message }}</p>
                @enderror
            
                <!-- Número de Aluno -->
                <input type="text" name="schoolnumber" id="schoolnumber" value="{{ old('schoolnumber') }}" placeholder="Número de Aluno" required class="mb-3 form-field">
                @error('schoolnumber')
                    <p class="label-error" style="margin-left: 10px; color: red;">{{ $message }}</p>
                @enderror
            
                <!-- Data de Nascimento -->
                <input type="date" name="birth_date" id="birth_date" value="{{ old('birth_date') }}" placeholder="Data de Nascimento" required class="mb-3 form-field">
                @error('birth_date')
                    <p class="label-error" style="margin-left: 10px; color: red;">{{ $message }}</p>
                @enderror
            
                <!-- Email -->
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required class="mb-3 form-field">
                @error('email')
                    <p class="label-error" style="margin-left: 10px; color: red;">{{ $message }}</p>
                @enderror
            
                <!-- Telefone -->
                <input type="text" name="phonenumber" id="phonenumber" value="{{ old('phonenumber') }}" placeholder="Telefone" required class="mb-3 form-field">
                @error('phonenumber')
                    <p class="label-error" style="margin-left: 10px; color: red;">{{ $message }}</p>
                @enderror
            
                <!-- Turma / Classe -->
                <input type="text" name="class" id="class" value="{{ old('class') }}" placeholder="Turma" required class="mb-3 form-field">
                @error('class')
                    <p class="label-error" style="margin-left: 10px; color: red;">{{ $message }}</p>
                @enderror
            
                <!-- Tamanho da T-shirt -->
                <input type="text" name="tshirt_size" id="tshirt_size" value="{{ old('tshirt_size') }}" placeholder="Tamanho da T-shirt" required class="mb-3 form-field">
                @error('tshirt_size')
                    <p class="label-error" style="margin-left: 10px; color: red;">{{ $message }}</p>
                @enderror

                <label class="form-label">Tem Alergias Alimentares?</label>

                <div class="radio-group">
                  <label class="radio-option">
                    <input type="radio" name="food_allergies" value="sim" class="radio-input" 
                      @if(old('food_allergies') === 'sim') checked @endif>
                    <span class="radio-text">Sim</span>
                  </label>
                  
                  <label class="radio-option">
                    <input type="radio" name="food_allergies" value="nao" class="radio-input"
                      @if(old('food_allergies') === 'nao') checked @endif>
                    <span class="radio-text">Não</span>
                  </label>
                </div>

                @error('food_allergies')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            
                <!-- Descrição das Alergias (opcional) -->
                <input type="text" name="allergies_description" value="{{ old('allergies_description') }}" placeholder="Descrição das Alergias" class="mb-3 form-field">
                @error('allergies_description')
                    <p class="label-error" style="margin-left: 10px; color: red;">{{ $message }}</p>
                @enderror

                <label class="form-label">Autorização de imagem?</label>

                <div class="radio-group">
                  <label class="radio-option">
                    <input type="radio" name="image_authorization" value="sim" class="radio-input" 
                      @if(old('image_authorization') === 'sim') checked @endif>
                    <span class="radio-text">Sim</span>
                  </label>
                  
                  <label class="radio-option">
                    <input type="radio" name="image_authorization" value="nao" class="radio-input"
                      @if(old('image_authorization') === 'nao') checked @endif>
                    <span class="radio-text">Não</span>
                  </label>
                </div>

                @error('image_authorization')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            
                <!-- Palavra-passe -->
                <input type="password" name="password" id="password" placeholder="Password" required class="mb-3 form-field">
                @error('password')
                    <p class="label-error" style="margin-left: 10px; color: red;">{{ $message }}</p>
                @enderror
            
                <!-- Confirmar Palavra-passe -->
                <input type="password" name="password_confirmation" placeholder="Confirmar Password" required class="mb-3 form-field">
            
                <!-- Submeter -->
                <button type="submit" class="mt-3">Concluir</button>
            </form>            
        </div>
    </div>

    <script src="{{ asset('/assets/js/fp_users.js') }}"></script>
</body>

</html>