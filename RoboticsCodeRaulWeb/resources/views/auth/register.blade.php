<!DOCTYPE html>
<html>

@include('layouts.head_formInscricao')

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <!-- Formulário de Registro -->
        <div class="signup">
            <form method="POST" action="{{ route('register') }}" onsubmit="return handleFormSubmit(event)">
                @csrf
                <label for="chk" aria-hidden="true">Registar</label>

                <!-- Campo para Nome -->
                <input id="name" type="text" name="name" value="{{ old('name') }}" required
                    placeholder="Primeiro e Último Nome" class="mb-3">
                @if ($errors->has('name'))
                    <p class="label-error" style="margin-left: 10px; color: red;">
                        {{ $errors->first('name') }}
                    </p>
                @endif

                <!-- Campo para Email -->
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                    class="mb-3">
                @if ($errors->has('email'))
                    <p class="label-error" style="margin-left: 30px; color: rgb(0, 0, 0);">
                        {{ $errors->first('email') }}
                    </p>
                @endif

                <!-- Campo para Senha -->
                <input type="password" name="password" placeholder="Password" required
                    title="A senha deve ter pelo menos 8 caracteres" class="mb-3">
                @if ($errors->has('password'))
                    <p class="label-error" style="margin-left: 30px; color: rgb(0, 0, 0);">
                        {{ $errors->first('password', 'A senha deve ter pelo menos 8 caracteres.') }}
                    </p>
                @endif

                <!-- Campo para Confirmar Senha -->
                <input type="password" name="password_confirmation" placeholder="Confirme sua Password" required
                    title="As senhas devem coincidir" class="mb-3">

                <button type="submit" class="mt-3">Concluir Registo</button>
            </form>
        </div>
    </div>
</body>

</html>
