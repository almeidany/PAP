<!DOCTYPE html>
<html>

@include('layouts.register.head')

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
                <input type="password" name="password" placeholder="Password" required class="mb-3">
                @if ($errors->has('password'))
                    <p class="label-error" style="margin-left: 30px; color: rgb(0, 0, 0);">
                        {{ $errors->first('password') }}
                    </p>
                @endif
                <!-- Campo para Confirmar Senha -->
                <input type="password" name="password_confirmation" placeholder="Confirme sua Password" required class="mb-3">
                <button type="submit" class="mt-3">Concluir Registo</button>
            </form>
        </div>
    </div>
    </script>
</body>

</html>
