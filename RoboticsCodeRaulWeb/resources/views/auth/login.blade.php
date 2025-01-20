<!DOCTYPE html>
<html>

@include('layouts.head_formInscricao')

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <!-- Formulário de Login -->
        <div class="login">
            <form method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Aceder</label>

                <!-- Campo para Email -->
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="error-message">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!-- Campo para Senha -->
                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <span class="error-message">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!-- Checkbox para Lembrar Login -->
                <div class="remember-me">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Lembrar-me</label>
                </div>

                <button type="submit">Aceder</button>

                <!-- Link para Recuperação de Senha -->
                @if (Route::has('password.request'))
                    <a class="btn-link" href="">Esqueceu a Senha?</a>
                @endif
            </form>
        </div>
    </div>
</body>

</html>
